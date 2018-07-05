<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Validator;

class RegionsController extends Controller
{
    //
    private $region;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {
     	$this->region = new Region();
     }

     /**
     * formulaire Region
     *
     * @param Illuminate\Http\Request $request
     * @return void
     */

     public function index()
     {
          $modal = 'region';
     	$lists = Region::get();
          foreach ($lists as $lt){
               $lt->id = $lt->IDREGION;
          }
          $action = route('admin.fmbb.add-region');
          $action_update = route('admin.fmbb.update-region');
     	return view('admin.fmbb.region',compact('lists','action','modal','action_update'));
     }

     /**
     * create add new Region
     *
     * @param Illuminate\Http\Request $request
     * @return void
     */

     public function create(Request $request)
     {
     	$messages = [ 'required' => 'Le champ :attribute est obligatoire.'];
     	$alert = null;
     	$validation = Validator::make($request->all(),[
     		'region' => 'required'
     	],$messages);

     	if($validation->fails())
     		return back()->withErrors($validation)->withInput();

     	$list = $this->region;
     	if(!is_null($request->president) )
     		$alert = 'et son président ';
          if( $this->region->authorized($request) )
     	    $list->president = $request->president;
          if( $this->region->existed($request) )
               $list->libelle = $request->region;
          else{
               return back()->with('error','Une erreur a été produite lors de l\'insertion! Veuillez réessayer');
               exit();
          }  
     	$list->save();
     	
     	return back()->with('success',"La region ".$alert."a été ajouté avec succès");
     }

     /**
     * edit Region
     *
     * @param Illuminate\Http\Request $request
     * @return void
     */

     public function edit(Request $request)
     {
          $messages = ['required' => "le champ :attribute' n' est pas valide"]; 
          $validation = Validator::make($request->all(),[
               'region' => 'required'
          ],$messages);
          $regions = $request->region;
          $presidents = $request->noms;
          $updt = Region::where('idregion',$request->id)->update(['libelle' => $regions, 'president' => $presidents]);
          return back()->with('success',"La region a été modifiée avec succés");
     }
}
