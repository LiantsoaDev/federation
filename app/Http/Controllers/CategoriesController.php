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
        return view('admin.categorie.index',compact('action','categorie','update'));
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
        $validation = $this->validate($request,['categorie' => 'required'],['required'=>'Le champ :attribute est obligatoire']);
        //verification
        $load = Categorie::where('libellecategorie','like','%'.$request->categorie.'%')->first();
        if( !empty($load->libellecategorie) )
            return back()->with('error','La categorie '.$load->libellecategorie.' existe déjà');
        else{
            $update = Categorie::findOrFail($request->id);
            $update->libellecategorie = $request->categorie;
            $update->save();
            return back()->with('success','La categorie '.$request->categorie.' a été modifié !');
        }

    }

}
