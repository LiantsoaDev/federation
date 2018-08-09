<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Categorie;

class CategoriesController extends Controller
{
	private $categorie;

	public function __construct()
	{
		$this->categorie = new Categorie();
	}
    /**
    * fonction insertion relation Events_categories
    * @param array 
    * @return Collection Object 
    */
    public function insertioncategorieevent($id, array $categorie)
    {
    	$tableauid = [];
    	//verification de la categorie
    	for($i=0;$i<count($categorie);$i++)
    	{
    		$idcategorie = Categorie::where('libellecategorie',$categorie[$i])->first()->id;
    		$tableauid[] = $idcategorie;
    		if(!empty($idcategorie))
    		{
    			$relation = ['event' => intval($id), 'categorie' => intval($idcategorie) ];
    			$this->categorie->insertionRelationshipEventsCategories($relation);
    		}
    		else
    		{
    			Session::flash('error','La catégorie correspondante n\'a été trouvé');
    			return null;
    		}
    	} 
    	return $tableauid;
    }

    /**
    * display of category index page
    *
    * @return void
    */

    public function index()
    {
        $categorie = Categorie::orderBy('libellecategorie','desc')->get();
        $action = action('CategoriesController@insert');
        $update = action('CategoriesController@update');
        $delete = "#";
        return view('admin.categorie.index',compact('action','categorie','update','delete'));
    }

    /**
    * class insertion action
    *
    * @param \Illuminate\Http\Request 
    * @return \Illuminate\Http\Response
    */

    public function insert(Request $request)
    {
        $validation = $this->validate($request,['categorie' => 'required'],['required' => 'Le champ :attribute est obligatoire']);
        //verification si categorie existe
        $verifier = Categorie::where('libellecategorie','like','%'.$request->categorie.'%')->first();
        if( !empty($verifier->libellecategorie) )
            return back()->with('error','La catégorie '.$verifier->libellecategorie.' existe déjà !');
        else
            $instance = new Categorie();
            $instance->libellecategorie = $request->categorie;
            $instance->save();
            return back()->with('success','La catégorie a été enregistré avec succès ! ');
    }

    /**
    * update categories
    * 
    * @param \Illuminate\Http\Request 
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request)
    {
        try{
            $validation = $this->validate($request,['categorie' => 'required'],['required'=>'Le champ :attribute est obligatoire']);
            $subject = Categorie::findOrFail($request->id);
            $subject->libellecategorie = $request->categorie;
            $subject->save();
            return back()->with('success',"La categorie a été modifiée avec succés");
        }
        catch (Exception $e)
        {
            report($e);
            return back()->with('error',"Oups ! <br> Une erreur s'est produite. Veuillez réessayer ulterieurement !<br>");
        }
    }

    /**
    * delete a categorie
    * 
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function delete($id)
    {
        try{
            $find = Categorie::findOrFail($id);
            $find->delete();
            return back()->with('success','La catégorie a été supprimée avec succés');
        }
        catch (Exception $e)
        {
            report($e);
        }
    }

}
