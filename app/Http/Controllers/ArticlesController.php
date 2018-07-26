<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Image;
use App\Article;
use Carbon\Carbon;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ManagersInfo;
use Auth;
use Exception;
use Illuminate\Support\Str;

use App\Http\Controllers\CoversController;

class ArticlesController extends Controller
{
    protected $article;
    protected $img;
    protected $page;
    protected $comments;

    public function __construct(Article $art)
    {
    	$this->article = $art;
    	$this->img = new ImagesController();
      $this->page = new CoversController();
      $this->comments = new CommentsController();
    }

    /**
    * fonction route ajout nouvel article
    * @param null
    * @return null
    */
    public function showAdminArticle()
    {
    	$choix = null;
    	return view('admin.addarticle',compact('choix'));
    }

    /**
    * fonction qui définisse le choix d'un article
    * @param Request $request
    * @return Response
    */
    public function choiceTypeArticle($type)
    {
    	switch ($type) {
    		case 'blog-postv1':
    			# code...
    			break;
    		case 'blog-postv2':
    			# code...
    			break;
    	}
    }

    /**
    * fonciton ajout de neouvel article
    * @param Request $request
    * @return Response
    */
    public function ajoutArticle(Request $request)
    {

    	$validation = $this->validate($request,[
    		'titre_article' => 'required',
    		'contenu_article' => 'required',
    		'categorie_article' => 'required',
    		'date_article' => 'required'
    	]);

    		$notificationMessage = "";
	    	if( $request->input('affichagescore_article') == 'on' )
	    	{
	    		$request->session()->flash('remarque','l\'option : affichage des scores n\'est pas encore disponible pour le moment');
	    	}
	    	if( $request->input('date_article') )
	    	{
	    		$publication = $this->programmerPublication($request);
	    		$notificationMessage .= $publication['message'];
	    	}
	    	$statut = $this->auhorizeAddArticle($request);
	    	$seo = $this->seoManage($request);
	    	$authlink = $this->authorizelinkvideo($request);
	    	$listimages = $this->insertMultipleImage($request);
	    	$imageRef = self::attributeImageReference($listimages);
	    	$idinsertionImage = $this->insertMultipleintoDB($listimages,$authlink,$imageRef);
	    	$valideInput = $this->insertionArticle($request,$statut,$seo,$publication,$idinsertionImage);

			return back()->with('success',"L'article a été enregistré avec succés ! <br>");

    }

    /**
    * fonction insertion d'une article
    * @param string $titre, string $contenu, string $tag, string $seo, string $statut, string $seoTitre, string $seoDescription, string $publicationDate, string $categorie, integer $idAuth, integer $idImage
    * @return boolean
    */
    public function insertionArticle(Request $request, $statut, $seo, $publication, $id)
    {

  			$new = new Article();
	    	$new->titre = $request->input('titre_article');
	    	$new->contenu = self::parserText($request->input('contenu_article'));
	    	$new->tag = $request->input('tag_article');
	    	$new->statut = $statut;
	    	$new->page_titre = $seo['titre'];
	    	$new->page_description = $seo['description'];
	    	$new->date_publication = $publication['date'];
	    	$new->categorie = $request->input('categorie_article');
	    	$new->user_id = Auth::user()->id;
	    	$new->image_id = $id;
	    	$new->save();
	    	return true;


    }

    /**
    * fonction autoriser lien video pour article
    * @param Request $request , integer $idarticle
    * @return boolean
    */
    public function authorizelinkvideo($request)
    {
    	if( $request->post('lienvideo_article') )
    	{
    		if($request->file('file'))
    			$name_imagecover = $this->uploadAndResize($request);
    		else
    			$name_imagecover = null;

    		$request->session()->flash('message',"Le lien video a été uploadé avec succés <br>");
    		return ['lien' => $request->post('lienvideo_article'), 'imagecover'=> $name_imagecover];
    	}
    }

    /**
    * Fonction upload image avec redimensionement Image
    * @param Request $request
    * @return Array $input['imagename']
    */
    public function uploadAndResize($request, $width=null, $height=null)
    {
        if($request->file('file'))
        {
            $this->validate($request, ['file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $image = $request->file('file');
            //uploader Image et le redimensionner
            return $this->img->uploadSimple($image);
        }
    }

    /**
    * fonction generer referencement Image et conversion en .jpg
    * @param string $urlImage
    * @return string $url.jpg
    */
    public static function attributeImageReference($chaineImage)
    {
    	$nomImageRef = 'default.jpg';
    	$decompressImage = explode("|",$chaineImage);
    	for ($i=0; $i <count($decompressImage) ; $i++) {
    		$taille = getimagesize(asset('images/uploads/'.$decompressImage[$i]));
    		if( $taille[0] >= $taille[1] )
    		{
    			$nomImageSansExt = explode(".",$decompressImage[$i]);
    			$nomImageRef = $nomImageSansExt[0] . '.jpg';
		        copy(public_path('images/uploads/'.$decompressImage[$i]), public_path('images/referencement/'.$nomImageRef));
		        break;
    		}
    	}
    	return $nomImageRef;
    }

    /**
    * fonction Programmation publication
    * @param Request $request
    * @return DateTime $date_publication
    */
    public function programmerPublication(Request $request)
    {
    	if( is_null($request->input('date_article')) )
    		$datePublication = null;
    	else{
    		$datePublication = date('Y-m-d H:i:s',strtotime($request->input('date_article')));
    		$message = " La publication de cet article a été programmé pour le " . $datePublication . "! <br>";
    	}
    	return ['date' => $datePublication, 'message' => $message ];
    }

    /**
    * fonction Referencement ou SEO
    * @param string $titre, string $description
    * @return Array $seo
    */
    public function seoManage( Request $request)
    {
    	$titre = htmlspecialchars($request->input('titre_article'));
    	$description = Article::trunque($request->input('contenu_article'),160);
    	return ['titre' => $titre, 'description' => $description];
    }

    /**
    * fonction Autoriser la publication d'un article
    * @param Request $request
    * @return boolean
    */
    public function auhorizeAddArticle(Request $request)
    {
    	if( $request->input('publication_article') == 'on' )
    		$statut = true;
    	else
    		$statut = false;

    	return $statut;
    }

    /**
    * fonction insert multiple Image
    * @param Request $request
    * @return Array $multipleImage
    */
    public function insertMultipleImage(Request $request)
    {
    	$listes_noms_images = [];
    	if( $request->file() )
    	{
    		$files = $request->file('files');
    		$this->validate($request, [ 'files.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
    		for ($i=0; $i < count($files); $i++) {
            	 $images = $files[$i];
            	 $listes_noms_images[] = $this->img->uploadSimple($images,$i);
    		}
    	}
    	return implode("|", $listes_noms_images);
    }

    /**
    * fonction parser de texte
    * @param string $texte
    * @return $string parser;
    */
    public static function parserText($texte)
    {
    	return htmlspecialchars(nl2br($texte));
    }

    /**
    * fonction insert in database Multiple Image
    * @param string $listimages , integer $id, string $imageRef
    * @param Collection Object Image
    */
    public function insertMultipleintoDB($listimages,$authlink,$imageRef)
    {
    		$img = new Image();
		    $img->urlimages = $listimages;
		    $img->imagereference = $imageRef;
		    if(!is_null($authlink['lien']))
		    	$img->urlvideo = $authlink['lien'];
		    if(!is_null($authlink['imagecover']))
		    	$img->urlcouverturevideo = $authlink['imagecover'];
		    $img->save();
		    return $img->id;
    }

    /**
    * fonction listes de tous les arcticles
    * @param null
    * @return Collection Object Article
    */
    public function showAllArticles()
    {
    	$all = $this->article->getAllArticles();

    	foreach ($all as $liste) {
    		$liste->titre = ucfirst(strtolower($liste->titre));
    		$liste->contenu = Article::trunque(htmlspecialchars_decode($liste->contenu),250);
    		$liste->page_titre = ucfirst(strtolower($liste->page_titre));
    		$liste->date_publication = date('d-m-Y',strtotime($liste->date_publication));
    		$liste->statut = self::manageStatut($liste->statut);
    		$liste->image  = self::getFirstImage($liste->urlimages);
            $liste->priorite = $this->priorityManager($liste);
    	}

    	return view('admin.listesarticles',compact('all'));
    }

    /**
    * fonction gestion des status
    * @param string $statut
    * @return string $codeHtml
    */
    public static function manageStatut($statut)
    {
    	switch ($statut) {
    		case '1':
    			$code = '<span class="label label-table label-success">active</span>';
    			break;
    		case '0':
    			$code = '<span class="label label-table label-dark">disabled</span>';
    			break;
    		default:
    			$code = '<span class="label label-table label-danger">waiting</span>';
    			break;
    	}
    	return $code;
    }

    /**
    * fonction getfirstImage Article
    * @param string $chaine
    * @return string $unique
    */
    public static function getFirstImage($chaine)
    {
    	$arrayImage = explode("|",$chaine);
    	return $arrayImage[0];
    }

    /**
    * fonction detail article dans la Backoffice
    * @param string idarticle
    * @return Collection Object Article
    */
    public function detailBackArticle($article_id)
    {
    	$images = [];
    	$details = $this->article->detailarticle($article_id);
    	$details->contenu = ucfirst(htmlspecialchars_decode($details->contenu));
    	$images = explode("|",$details->urlimages);
    	$details->created_at = Carbon::parse($details->created_at)->diffForHumans();
    	$tags = explode(",",$details->tag);
    	$details->nbrelecture = $this->article->getNbrelectureAttribute($details->nbrelecture);
    	$details->statut = $this->article->getStatutAttribute($details->statut);
    	return view('admin.detailarticleback',compact('details','images','tags'));
    }

    /**
    * fonction show page modification Article
    * @param integer $idarticle
    * @return view
    */
    public function showmodificationArticle($idarticle)
    {
    	$details = $this->article->detailarticle($idarticle);
        foreach ($details as $value) {
            $details->contenu = str_replace("<br />","\n",$details->contenu);
        }
    	$categorie = ['Equipe','Injurie','Compétition','Fait divers','Organisation','Formation','Arbitrage','Actualité'];
    	$images = explode("|",$details->urlimages);

    	return view('admin.updatearticle',compact('details','categorie','images'));
    }

    /**
    * fonction Modification article
    * @param Request $request
    * @return view
    */
    public function modificationArticle(Request $request)
    {

    	$validation = $this->validate($request,[
    		'titre_article' => 'required',
    		'categorie_article' => 'required',
    		'contenu_article' => 'required',
    		'reference_article' => 'required'
    	]);
    	$id = intval($request->input('reference_article'));
    	$paragraphe = htmlspecialchars($request->input('contenu_article'));
    	$this->article->updateArticle($id,[
    		'titre' => $request->input('titre_article'),
    		'contenu' => nl2br($request->input('contenu_article')),
    		'tag' => $request->input('tag_article'),
    		'page_titre' => strtolower($request->input('titre_article')),
            'categorie' => $request->input('categorie_article'),
    		'page_description' => Article::trunque($request->input('contenu_article'),160),
    		'date_publication' => date('Y-m-d H:i:s',strtotime($request->input('date_article')))
    	]);
    	//modification image
    	if( $request->file() )
    		$this->img->updateUploadImage($request,$request->input('reference_article'));

    	return back()->with('success',"L'article a été modifé avec succès ! <br>");
    }

    /**
    * fonction archivage article
    * @param integer $idarticle
    * @return view
    */
    public function archivageArticle($idarticle)
    {
    	$archiver = $this->article->updateArticle($idarticle, ['statut' => 0 ]);
    	return back()->with('success',"L'article a été archivé par l'Administrateur ! <br>");
    }

    /**
    * fonction publication article
    * @param integer $idarticle
    * @return view
    */
    public function publicationArticle($idarticle)
    {
    	$publ = $this->article->updateArticle($idarticle, ['statut' => 1 ]);
    	return back()->with('success',"L'article a été publié avec succès par l'Administrateur ! <br>");
    }

    /**
    * fonction detail article côté FrontOffice
    * @param integer $idarticle , string $slug
    * @return view
    */
    public function detailarticleFront(Request $request)
    {
    	$options = "hide";

      //configuration du site
      $parameters = ManagersInfo::index();
      $logo = $this->page->getlogo();

    	$array = $request->get('articles');
    	$array->firstimage = ArticlesController::getFirstImage($array->urlimages);
    	$images = explode("|",$array->urlimages);
    	$tags = explode(",",$array->tag);
    	$similaire = self::attribution($this->article->getsimilaireArticle($array->categorie),250);
    	$articleMois = self::attribution($this->article->getarticleparmois(),250);
    	$seo = $this->getSeo($array);

      //get commentaire
      $commentaires = $this->comments->getcomment($array->id);

    	switch ($array->categorie) {
    		case 'Equipe':
    			return view('front.articlemodele1',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
    			break;
    		case 'Injurie':
    			return view('front.articlemodele1',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
                break;
    		case 'Compétition':
    			return view('front.articlemodele2',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
                break;
    		case 'Faits divers':
    			return view('front.articlemodele1',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
                break;
    		case 'Organisation':
    			return view('front.articlemodele2',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
                break;
    		case 'Formation':
    			return view('front.articlemodele1',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
                break;
    		case 'Arbitrage':
    			return view('front.articlemodele1',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
                break;
    		case 'Actualité':
    			return view('front.articlemodele1',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
                break;
    		default:
    			return view('front.articlemodele1',compact('array','images','tags','similaire','options','articleMois','seo','logo','parameters','commentaires'));
    			break;
    	}
    }
    /**
    * fonction attribution d'un article
    * @param Array $articleDB, integer $trunquelimit
    * @return Array $article
    */
    public static function attribution($articleDB,$trunquelimit=null)
    {
    	if(is_null($trunquelimit))
    		$trunquelimit = 200;

    	if( !is_null($articleDB) )
    	{
    		foreach ($articleDB as $value) {
    			$value->firstimage = ArticlesController::getFirstImage($value->urlimages);
	            $value->contenu = Article::trunque($value->contenu,intval($trunquelimit));
	            $value->slug = Str::slug($value->titre);
    		}
    		return $articleDB;
    	}
    }

   	/**
   	* fonction generation de la referencement
   	* @param Array $article
   	* @return Array $seo
   	*/
   	public static function getSeo($article)
   	{
   		$seo = [];
   		if( !is_null($article) )
   		{
   			$seo['titre'] = Article::trunque($article->titre,60);
   			$seo['description'] = Article::trunque(strip_tags($article->page_description),155);
   			$seo["tags"] = $article->tag;
   			$seo['image'] = asset('images/uploads/'.$article->imagereference);
   			$seo['authorGoogleplusUrl'] = "";
   			$seo["publisherGoogleplusUrl"] = "";
   			$seo["twitterCard"] = "";
   			$seo["twitterSite"] = "";
   			$seo["twitterDescription"] = Article::trunque(strip_tags($article->page_description),160);
   			$seo["twitterCreator"] = "";
   			$seo["twitterUrl"] = config('app.url').'/articles/'.$article->id.'/'.Str::slug($article->titre);
   			$seo["twitterDomain"] = config('app.url');
   			$seo["publishedTime"] = date(DATE_ATOM, strtotime($article->created_at));
   			$seo["modifiedTime"] = date(DATE_ATOM, strtotime($article->updated_at));
   			$seo["fbnumericId"] = "";
   			$seo["fbnumericAppId"] = "";
   			$seo["fbUrlProfile"] = "";
   			$seo["fbUrlPage"] = "";
   			$seo["siteName"] = config('app.name');
   			return json_decode(json_encode($seo),false);
   		}
   	}

    /**
    * fonction mise A la Une Article
    * @param integer $idarticle
    * @return boolean
    */
    public function misenUne($idarticle)
    {
        try{
        //verifier si le nombre de Une permet l'opération
        $nbre = $this->article->counter();
        if( $nbre >= 5){
            return back()
            ->with('error','Attention ! Liberé des articles en <code>Une</code> pour assigner de nouvelle ! <br> Le nombre actuel est de '.$nbre);
            exit();
        }else{
            $articleune = $this->article->updateToUne($idarticle,intval(1));
            return back()->with('success',"L'article a bien été mis en Une de la publicité et affichera en priorité! <br>");
        }
        }
        catch (Exception $e)
        {
            report($e);
            return back()->with('error','Oups ! <br> Une erreur s\'est produite !');
        }
    }

    /**
    * fonction gestion d'affichage des priorités
    * @param string $priorite
    * @return $lien
    */
    public function priorityManager($datas)
    {
        if( is_null($datas->priorite) )
            return '<a href='.route('en.une',$datas->id).' class="btn btn-warning btn-icon btn-circle icon-lg fa fa-arrow-up"></a>';
        else
            return '<a href='.route('annulation.une',$datas->id).' class="btn btn-primary btn-icon btn-circle icon-lg fa fa-thumbs-up"></a>';
    }

    /**
    * fonction annuler la mise en une
    * @param integer $idarticle
    * @return view
    */
    public function annulerUne($idarticle)
    {
        if( !is_null($idarticle))
            $annulationune = $this->article->updateToUne($idarticle,null);
        return back()->with('success',"L'article ne sera plus à la Une ! <br>");
    }
}
