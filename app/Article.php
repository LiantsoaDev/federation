<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Article extends Model
{

    protected $fillable = ['titre','contenu','nbrelecture','tag','seo','statut','page_titre','page_description','date_publication','categorie','user_id','image_id','priorite'];

    /**
    * fonction Query principale Article
    * @param null
    * @return Collection Object Image
    */
    public function getQueryArticle()
    {
    	return DB::table('articles')
    			->select('articles.id','articles.titre','articles.contenu','articles.nbrelecture','articles.tag','articles.seo','articles.statut','articles.page_titre','articles.page_description','articles.date_publication','articles.user_id','articles.image_id','articles.created_at','articles.updated_at','articles.categorie','articles.priorite','images.urlimages','images.urlvideo','images.options','images.urlcouverturevideo','images.imagereference')
    			->join('images','articles.image_id','=','images.id');
    }


    /**
    * fonction Scope get article By idarticle
    * @param integer $idarticle
    * @return Collection Object Article
    */
    public function getarticlebyid($idarticle)
    {
    	return $this->getQueryArticle()->where('articles.id',$idarticle)->first();
    }

    /**
    * fonction insertion nouvelle article
    * @param Array $insertion
    * @return Response
    */
    public function insertArticle($insertion)
    {
    	if( is_array($insertion) )
    	{
    		return self::create([
    		'titre' => $insertion[0],
    		'contenu' => $insertion[1],
    		'tag' => $insertion[2],
    		'seo' => $insertion[3],
    		'statut' => $insertion[4],'page_titre' => $insertion[5],'page_description' => $insertion[6],'date_publication' => $insertion[7],'categorie'=> $insertion[8],'user_id' =>$insertion[9]
    	]);
    	}
    }

    /**
    * fonction truncage de texte
    * @return string $str, integer $nb
    */
    public static function trunque($str, $nb = 150)
    {
		if (strlen($str) > $nb)
		{
			$str = substr($str, 0, $nb);
			$position_espace = strrpos($str, " ");
			$texte = substr($str, 0, $position_espace);
			$str = $str."...";
		}
		return $str;
	}

	/**
	* fonction get AllArticles avec Image et Video
	* @param null
	* @return Collection Object Article
	*/
	public function getAllArticles()
	{
		return $this->getQueryArticle()->orderBy('articles.priorite','desc')->orderBy('articles.created_at','desc')->paginate(15);
	}

	/**
	* fonction detail article by idarticle
	* @param integer $id
	* @return Collection object Article
	*/
	public function detailarticle($id)
	{
		return $this->getQueryArticle()->where('articles.id',$id)->first();
	}

	/**
	* fonction getter page description
	* @param string $value
	* @return string $value
	*/
	public function getPageDescriptionAttribute($value)
	{
		return strip_tags($value);
	}

	/**
	* fonction update Article
	* @param integer $idarticle, Array $arrayUpdate
	*/
	public function updateArticle($idarticle, $arrayUpdate)
	{
		return self::where('id',$idarticle)->update($arrayUpdate);
	}

	/**
	* fonction get les articles à mettre en une
	* @param integer $nbreArticle
	* @return Collection Object Article
	*/
	public function getarticleAlaUne($nbreArticle)
	{
		return $this->getQueryArticle()->whereDate('date_publication','<=',Carbon::today()->toDateString())->where('articles.statut',1)->orderBy('articles.priorite','desc')->orderBy('articles.date_publication','desc')->limit($nbreArticle)->get();
	}

	/**
	* fonction get articles de la semaine excepter les articles à la une
	* @param Array $in , integer $afficher
	* @return Collection Object
	*/
	public function getrticleperweek($in,$nbre=null)
	{
		if( is_null($nbre) )
			$nbre = 6;

		return $this->getQueryArticle()->whereNotIn('articles.id',$in)
					->whereBetween('articles.date_publication',[Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])
					->where('articles.statut',1)
					->orderBy('articles.date_publication','desc')->get();
	}

	/**
	* fonction get article de ce mois
	* @param Array $exception, integer $nbreafficher
	* @return Collection Object Article
	*/
	public function getarticleparmois($exception=null, $nbre=null)
	{
		$query = $this->getQueryArticle();

		if( is_null($nbre) )
			$nbre = 10;
		if( is_null($exception) ){
			$raw = $query->where('articles.statut',1)->orderBy('articles.updated_at','desc')->paginate($nbre);
		}elseif(is_array($exception)){
			$raw = $query->whereNotIn('articles.id',$exception)->where('articles.statut',1)->orderBy('articles.updated_at','desc')->paginate($nbre);
		}

		return $raw;
	}

	/**
	* fonction get article similaire même categorie
	* @param string $similaire
	* @return Collection Object Article
	*/
	public function getsimilaireArticle($similaire)
	{
		return $this->getQueryArticle()->where('categorie',$similaire)->whereBetween('articles.date_publication',[Carbon::now()->startOfMonth(),Carbon::now()->endOfMonth()])->where('articles.statut',1)->orderBy('articles.date_publication','desc')->get();
	}

	/**
	* fonction mettre en une Article
	* @param integer $idarticle
	* @return boolean
	*/
	public function updateToUne($idarticle,$priorite)
	{
		return self::where('id',$idarticle)->update(['priorite' => $priorite]);
	}

	/**
	* fonction getter nombre de lecture
	* @param string $value
	* @return string $value
	*/
	public function getNbrelectureAttribute($value)
	{
		if( is_null($value) )
			return "0";
		else
			return $value;
	}

	/**
	* fonction getter page titre
	* @param string $value
	* @return string $value
	*/
	public function getPageTitreAttribute($value)
	{
		return strtolower($value);
	}

	/**
	* fonction getter statut
	* @param string $value
	* @return string $value
	*/
	public function getStatutAttribute($value)
	{
		if( $value == '1')
			return '<span class="label label-sm label-success">Publié</span>';
		else
			return '<span class="label label-sm label-danger">Archivé</span>';
	}

	/**
	* compter les priorites
	* 
	* @return \Illuminate\Http\Response
	*/
	public function counter()
	{
		return self::where('priorite',1)->count();
	}

}
