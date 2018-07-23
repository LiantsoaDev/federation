<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Palmares;
use App\Categorie;
use Carbon\Carbon;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;

class PalmaresController extends Controller
{
    
    private $page;
    private $palmares;

    /**
    * new instance of Palmares 
    *
    * @return void
    */

    public function __construct()
    {
    	$this->page = new CoversController();
    	$this->palmares = new Palmares();
    }

    /**
    * diplay Palmares controller to backoffice
    *
    * @return \Illuminate\Http\Response
    */

    public function show()
    {
    	$action = action('PalmaresController@insert');
    	$competition = Categorie::orderBy('libellecategorie','desc')->get();
        $palmares = new Palmares();
    	$datas = $palmares->getQueryPalmares()->orderBy('date','desc')->get();
    	return view('admin.palmares.show',compact('action','competition','datas'));
    }

    /**
    * display insert new Palmares
    *
    * @return void
    */

    public function insert(Request $request)
    {
    	$validation = $this->validate($request,[
    		'prix' => 'required',
    		'date' => 'required',
    		'option' => 'required',
    		'categorie' => 'required',
    		'genre' => 'required',
    	],['required' => 'le champ :attribute est obligatoire']);

    	$new = new Palmares();
    	$new->prix = $request->prix;
    	$new->date = date('Y-m-d',strtotime($request->date));
    	if( $request->option == 'on' )
    		$new->options = 0;
    	else
    		$new->options = 1;
    	$new->categorie_id = $request->categorie;
    	$new->genre = $request->genre;
    	$new->save();
    	return back()->with('success','Un nouveau palmarès a été ajouté !');
    }

    /**
    * get une compétition pour un palmares
    * 
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function getcompetition($id)
    {
    	$requete = new Palmares();
    	$datas = $requete->getQueryPalmares()->where('categories.id',$id)->get();
        if( !array_is_empty($datas))
        {
            foreach($datas as $data)
            {
                $categorie = $data->libellecategorie;
            }
        }
        else
        {
            $categorie = Categorie::findOrFail($id)->libellecategorie;
        }
    	return view('admin.palmares.page-ajax',compact('datas','action','categorie'));
    }

    /**
    * display update page Palmares
    * 
    * @var integer
    * @return \Illuminate\Http\Response
    */

    public function edit($id)
    {
    	$palmares = Palmares::findOrFail($id);
    	$action = action('PalmaresController@update');
    	return view('admin.palmares.edit',compact('palmares','action'));
    }

    /**
    * update Palmares
    * 
    * @param \Illuminate\Http\Resquest
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request)
    {
        try{
    	$validation = $this->validate($request,[
            'prix' => 'required',
            'date' => 'required'
        ],['required' => 'Le champ :attribute est obligatoire']);

        $update = Palmares::findOrFail($request->id);
        $update->prix = $request->prix;
        $update->date = date('Y-m-d',strtotime($request->date));
        $update->save();
        return back()->with('success','Le Palmarès a été modifié avec succès ! ');
        }
        catch(Exception $e)
        {
            report($e);
            return back()->with('error','Oups ! Une erreur s\'est produite ! ');
        }
    }

    /**
    * delete Palmares
    *
    * @param \Illuminate\Http\Request 
    * @return \Illuminate\Http\Response
    */

    public function delete($id)
    {
        try{
            $delete = Palmares::findOrFail($id);
            $delete->delete();
            return back()->with('success',"Le Palmarès a été modifié avec succès ! ");
        }
        catch(Exception $e)
        {
            report($e);
            return back()->with('error',' Oups ! Une erreur s\'est produite ! ');
        }
    }

    /**
    * index of Palmares front-office
    * 
    * @return void
    */

    public function index()
    {
        $querypalmares = new Palmares();
        $tabpalmares = [];
        $getsaison = Categorie::get(['id','libellecategorie']);
        foreach($getsaison as $ids)
        {
            $requete = $querypalmares->getQueryPalmares()->where('categorie_id',$ids->id)->get();
            $tabpalmares[ strtolower($ids->libellecategorie)] = $requete; 
            foreach($requete as $rqt)
            {
                $date[] = date('Y',strtotime($rqt->date));
                $compet[] = $rqt->libellecategorie;
            }  
        }
        $palmares = json_decode(json_encode($tabpalmares),false);
        $dates = array_unique($date);
        $compets = array_unique($compet);

        //configuration du site et metadonnées
        $variables = $this->metadata();
        $titre = $variables->titre;
        $contenu = $variables->contenu;
        $tags = $variables->tags;
        $time = $variables->time;
        $parameters = $variables->parameters;
        $logo = $variables->logo;
        $action = $variables->action;
        return view('front.palmares.index',compact('titre','contenu','tags','time','palmares','parameters','logo','dates','compets','action'));
    }

    /**
    * Filter Palmares Front-End
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function filter(Request $request)
    {
        $instance = new Palmares();
        $instance->query = $instance->getQueryPalmares();
        $palmares = $instance->filters($request)->get();
        //listes compétitions
        $getcompet = $instance->getQueryPalmares()->get();
        foreach ($getcompet as $value) {
            $compet[] = $value->libellecategorie;
            $date[] = date('Y',strtotime($value->date));
        }
        $compets = array_unique($compet);
        $dates = array_unique($date);

        //configuration du site et metadonnée
        $variables = $this->metadata();
        $titre = $variables->titre;
        $contenu = $variables->contenu;
        $tags = $variables->tags;
        $time = $variables->time;
        $parameters = $variables->parameters;
        $logo = $variables->logo;
        $action = $variables->action;
        return view('front.palmares.result',compact('titre','contenu','tags','time','palmares','parameters','logo','dates','compets','action'));
    }

    /**
    * Meta data for Palmares Front-End
    * 
    * @return \Illuminate\Http\Response
    */

    public function metadata()
    {
        //configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();

        $titre = 'Les Palmarès de la fédération Malagasy du Basket-ball';
        $tags = 'Palmarès, fmbb,'.date('d/m/Y').', compétition, médaille, coupe';
        $contenu = 'Les Palmarès de la fédération Malagasy du Basket-ball depuis son existence';
        $time = date('d-M-Y H');
        $action = action('PalmaresController@filter');
        $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.palmares'),$time);
        $return =  ['parameters' => $parameters, 'logo' => $logo,'titre' => $titre,'contenu' => $contenu, 'time' => $time, 'action' => $action, 'seo' => $seo,'tags' => $tags];
        return json_decode(json_encode($return),false);
    }

}
