<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partenaire;
use App\Http\Controllers\ImagesController;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;
use File;

class PartenairesController extends Controller
{
    
    private $partenaire;
    private $page;

    /**
    * a new instance of this class
    *
    * @return void
    */

    public function __construct()
    {
    	$this->partenaire = new Partenaire();
    	$this->page = new CoversController();
    }

    /**
    * show a partner display in backoffice
    * 
    * @return \Illuminate\Http\Response
    */

    public function show()
    {
    	$datas = Partenaire::all();
    	foreach($datas as $value )
    	{
    		if( $value->option == 1)
    			$value->option = '<span class="label label-danger">Non affiché</span>';
    		else
    			$value->option = '<span class="label label-success">Affiché</span>';
    	}
    	$action = action('PartenairesController@insert');
    	return view('admin.partenaire.show',compact('datas','action'));
    }

    /**
    * insert a partner 
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function insert(Request $request)
    {
    	try{

    	$validation = $this->validate($request,[
    		'titre' => 'required',
    		'description' => 'required',
    		'option' => 'required',
    		'file' => 'dimensions:max_width=600,max_height=600|image|mimes:jpeg,png,jpg,svg|max:2048'
    	],[
    		'required' => 'Ce champ :attribute est obligatoire',
    		'dimensions' => "La taille de l'image doit être au minimum de 600 x 600px"
    	]);
    	
    	$insert = new Partenaire();
    	$insert->titre = $request->titre;
    	$insert->description = $request->description;
    	if( !is_null($request->option ))
    		$insert->option = 0;
    	else
    		$insert->option = 1;

    	if( $request->file )
    	{
    		$image = new ImagesController();
    		$image->chemin = "/images/partners";
    		$insert->icone = $image->uploadSimple($request->file);
    	}
    	$insert->save();
    	return back()->with('success',"Partenaire ajouté avec succès");
    	}
    	catch (Exception $e){
    		report($e);
    		return back()->with('error',"Oups! Une erreur s'est produite ! <br>");
    	}
    }

    /**
    * display for modification
    * 
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function edit($id)
    {
    	try{
    		$action = action('PartenairesController@update');
	    	$getValue = Partenaire::findOrFail($id);
	    	return view('admin.partenaire.edit',compact('getValue','action'));
    	}
    	catch (Exception $e)
    	{
    		report($e);
    		return back()->with('error',"Oups ! Une erreur s'est produite ! <br>");
    	}
    }

    /**
    * update a partner
    *
    * @param \Illuminate\Http\Request 
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request)
    {
    	try{
    		$validation = $this->validate($request,[
    			'titre' => 'required',
    			'description' => 'required',
    			'option' => 'required',
    			'file' => 'dimensions:max_width=600,max_height=600|image|mimes:jpeg,png,jpg,svg|max:2048'
     		],[
     			'required' => 'Le champ :attribute est obligatoire',
     			'dimensions' => "La taille de l'image ne doit pas être supérieur à 600 x 600px",
     			'image'  => 'Le fichier doit être une image',
     			'mimes'  => 'Le fichier doit être de type: :values.'
     		]);
    		$find = Partenaire::findOrFail($request->id);
    		$find->titre = $request->titre;
    		$find-> description = $request->description;
    		if( !is_null($find->option))
    			$find->option = 0;
    		else
    			$find->option = 1;

    		if( $request->file)
    		{
    			File::delete(public_path() . '/images/partners/'. $find->icone);
    			$image = new ImagesController();
    			$image->chemin = '/images/partners';
    			$find->icone = $image->uploadSimple($request->file);
    		}
    		$find->save();
    		return back()->with('success',"Partenaire modifié avec succès !");
    	}
    	catch (Exception $e)
    	{
    		report($e);
    		return back()->with('error',"Oups ! Une erreur s'est produite ! <br>");
    	}
    } 

    /**
    * delete a partner
    *
    * @param \Illuminate\Http\Request
    * @param \Illuminate\Http\Response
    */

    public function delete($id)
    {
    	try{
    		$value = Partenaire::findOrFail($id);
    		if($value){
    			$value->delete();
    			return back()->with('success',"Partenaire supprimé avec succès !");
    		}
    	}
    	catch (Exception $e)
    	{
    		report($e);
    		return back()->with('error',"Oups ! Une erreur s'est produite ! <br>");
    	}
    }

    /**
    * show partners in the front office
    *
    * @return \Illuminate\Http\Resquest
    */

    public function index()
    {
    	//configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();

        $partenaire = Partenaire::where('option',0)->get();
        $titre = $contenu = 'Les partenaires officiels';
        $tags = 'Partenaire, Partenaires, fmbb, basket-ball, Madagascar';
        $time = date('d-m-Y');
        $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.partner'),$time);
        return view('front.partners.index',compact('seo','partenaire','parameters','logo','titre','contenu','tags','time'));
    }

}
