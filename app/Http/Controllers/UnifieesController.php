<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unifiee;
use App\Http\Controllers\ImagesController;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;


class UnifieesController extends Controller
{
    
    private $page;
    private $unifiee;
    public $image;

    /**
    * new instance of controller
    * 
    * @return void
    */

    public function __construct()
    {
    	$this->page = new CoversController();
    	$this->unifiee = new Unifiee;	
    	$this->image = new ImagesController();
    }

    /** 
    * display of the unified front office regulation
    * 
    * @return \Illuminate\Http\Response
    */

    public function show()
    {
    	$datas = Unifiee::first();
    	$datas->contenu = str_replace("<br />"," ",$datas->contenu);
    	$action = action('UnifieesController@insert');
    	return view('admin.fmbb.unifie.show',compact('action','datas'));
    }

    /**
    * insert a unified regulation
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function insert(Request $request)
    {
    	try{
	    	$validation = $this->validate($request,[
	    		'titre' => 'required',
	    		'contenu' => 'required',
	    		'tags' =>  'required',
	    		'file' => 'dimensions:min_width=1500,min_height=640|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
	    	],[
	    		'dimensions' => 'La taille du fichier :attribute doit être au moins de 1500x640px'
	    	]);

	    	if( $request->id )
	    		$insert = Unifiee::findOrFail($request->id);
	    	else
	    		$insert = new Unifiee();
	    	$insert->titre = $request->titre;
	    	$insert->contenu = $request->contenu;
	    	$insert->tags = $request->tags;
	    	if( $request->file )
	    	{
	    		$insert->image = $this->image->uploadSimple($request->file);
	    	}
	    	$insert->save();
	    	return back()->with('success',"Le contenu a été bien enregistré !");
	    }
	    catch (Exception $e)
	    {
	    	report($e);
	    	return back()->with('error',"Oups ! Une erreur s'est produite ! <br>");
	    }
    }

    /**
    * take the information for the front office
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
    	//configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();

        $datas = Unifiee::first();
        $titre = $datas->titre;
        $contenu = $datas->contenu;
        $tags = $datas->tags;
        $time = $datas->updated_at;
        $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.partner'),$time);
        return view('front.reglement_unifiee.index',compact('seo','datas','parameters','logo','titre','contenu','tags','time'));
    }
}
