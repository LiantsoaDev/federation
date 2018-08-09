<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organigramme;
use App\Http\Controllers\ImagesController;
use File;
use Route;

class OrganigrammesController extends Controller
{
    //
    private $organigramme;

    /**
    * new instance of controller 
    * 
    * @return void
    */

    public function __construct()
    {
    	$this->organigramme = new Organigramme();
    }

    /**
    * display of organigramme Manager Backoffice
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
    	$action = action('OrganigrammesController@create');
    	$update = action('OrganigrammesController@update');
    	$datas = Organigramme::all();
    	foreach ($datas as $data) {
    		if($data->options == 1)
    			$data->options = '<span class="badge badge-success">S\'affiche dans le front</span>';
    		else
    			$data->options = '<span class="badge badge-danger">Ne s\'affiche pas</span>';
            if( preg_match('@^(?:http://)?([^/]+)@i',$data->page) )
                $data->page = str_replace(config('app.url').'/','',$data->page);
    	}
    	return view('admin.organigramme.index',compact('action','datas','update'));
    }

    /**
    * createe a new instance of organigramme
    *
    * @param \Illuminate\Http\Request
    * @return \Illumninate\Http\Response
    */

    public function create(Request $request)
    {
    	$validation = $this->validate($request,[
    		'titre' => 'required','options' => 'required','tags' => 'required', 
    		'file' => 'dimensions:min_width=1500,min_height=640|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    	],['required' => 'Le champ :attribute est obligatoire','dimensions' => 'La dimension minimale de l\'image doit être 1500 x 640 px']);

    	$insert = new Organigramme();
    	$img = new ImagesController();

    	if( $request->file )
    	{
    		$img->chemin = '/images/organigramme';
    		$insert->organigramme = $img->uploadSimple($request->file);
    		$insert->titre = $request->titre;
    		($request->options == 'on')? $insert->options = 1 : $insert->options = 0; //1 affiche 0 pas affiche
    		if( !is_null($request->tags))
    			$insert->tags = $request->tags;

    		$insert->save();
    		return back()->with('success',"L'organigramme a été ajouté avec succès");
    	}
    	else
    	{
    		return back()->with('error',"Erreur - vous n'avez pas insérer une image valide ");
    		exit();
    	}
    }

    /**
    * update a instance of Organigramme
    * 
    * @param \Illumninate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request)
    {
    	try{
    	$validation = $this->validate($request,
    		['titre' => 'required', 'options' => 'required' ,'tags' => 'required'],
    		['required' => 'Le champ :attribute est obligatoire']
    	);

    	$image = new ImagesController();
    	$update = Organigramme::findOrFail($request->id);
    	if( $request->file )
    	{
    		$image_validate = $this->validate($request,
    			['file' => 'dimensions:min_width=1500,min_height=640|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
    			['dimensions' => 'La dimension minimale de l\'image doit être 1500 x 640 px']
    		);
    		$image->chemin = 'images/organigramme';
    		File::delete(public_path().'/images/organigramme/'.$update->organigramme);
    		$update->organigramme = $image->uploadSimple($request->file);
    	}
    	$update->titre = $request->titre;
    	if( $request->options == 'on')
    		$update->options = 1;
    	else
    		$update->options = 0;

        if($request->page)
            $update->page = $request->page;
        
    	$update->tags = $request->tags;
    	$update->save();
    	return back()->with('success',"L'organigramme a été modifié avec succès");
    	}
    	catch (Exception $e)
    	{
    		report($e);
    	}
    }

    /**
    * delete a instance of Organigramme
    * 
    * @param \Illuminate\Http\Request
    * @param \Illuminate/Http\Response 
    */

    public function delete($id)
    {
    	try{
    		$delete = Organigramme::findOrFail($id);
    		if( !empty($delete))
    		{
    			File::delete(public_path().'/images/organigramme/'.$delete->organigramme);
    			$delete->delete();
    			return back()->with('success',"L'organigramme a été supprimé avec succés");
    		}
    		else
    			return back()->with('error',"Oups ! <br> une erreur s'est produite ! Veuillez réessayer ");
    	}
    	catch(Exception $e)
    	{
    		report($e);
    	}
    }
}
