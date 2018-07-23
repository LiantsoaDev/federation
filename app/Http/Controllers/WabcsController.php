<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wabc;

class WabcsController extends Controller
{
    
    /**
    * variable private
    *
    */

    private $lists;

    /**
    * a instance of Controller
    *
    * @return void
    */

    public function __construct()
    {
    	$this->lists = new Wabc();
    }

    /**
    * posting lists of WABC members
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function show()
    {
    	$datas = Wabc::all();
    	$action = action('WabcsController@insert');
    	$update = action('WabcsController@update');
    	return view('admin.community.show',compact('datas','action','update'));
    }

    /**
    * create a instance of Wabc
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function insert(Request $request)
    {
    	try{
    		$validation = $this->validate($request,['nom' => 'required','federation' => 'required'],['required' => 'Le champ :attribute est obligatoire']);
	    	$insert = new Wabc();
	    	$insert->nom = $request->nom;
	    	$insert->federation = $request->federation;
	    	if( !empty($request->licence) && is_numeric($request->licence))
	    		$insert->licence_id = $request->licence;
	    	if( !is_numeric($request->licence))
	    		return back()->with('error',"Licence ID non valide");
	    	$insert->save();
	    	return back()->with('success','Un Membre de la WABC a été ajouté avec succès');
    	}
    	catch(Exception $e)
    	{
    		report($e);
    		return back()->with('error',"Oups ! une erreur s'est produite ! <br> Veuillez réessayer ulterieurement! ");
    	}
    }

    /**
    * update a instance of Wabc
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request)
    {
    	try{
    		$validation = $this->validate($request,['nom' => 'required','federation' => 'required'],['required' => 'Le champ :attribute est obligatoire']);
    		$member = Wabc::findOrFail($request->id);
    		$member->nom = $request->input('nom');
    		$member->federation = $request->federation;
    		if( $request->licence )
    			if(is_numeric($request->licence))
    				$member->licence_id = $request->licence;
    			else
    				return back()->with('error','Licence ID non valide');

    		$member->save();
    		return back()->with('success','Le membre de la WABC a été modifié avec succès');

    	}
    	catch(Exception $e)
    	{
    		report($e);
    		return back()->with('error',"Oups ! <br> Une erreur s'est produite !");
    	}
    }

    /**
    * delete a member WABC
    * 
    * @var integer $id
    * @return \Illuminate\Http\Response
    */

    public function delete($id)
    {
    	try{
    		$wabc = Wabc::findOrFail($id);
    		$wabc->delete();
    		return back()->with('success','Un membre de la WABC a été supprimé');
    	}
    	catch (Exception $e)
    	{
    		report($e);
    		return back()->with('error',"Oups ! Une erreur s'est produite ! Veuillez réessayer ulterieurement !");
    	}
    }

    /**
    * get all members of WABC to Front-End
    * 
    * @return \Illuminate\Http\Request
    */


}
