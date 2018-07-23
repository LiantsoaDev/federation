<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use Validator;
use App\Http\Controllers\ImagesController;
use File;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;

class RegionsController extends Controller
{
    //
    private $region;
    private $page;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {
     	$this->region = new Region();
          $this->page = new CoversController();
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
          $option = true;
     	$lists = Region::get();
          foreach ($lists as $lt){
               $lt->id = $lt->IDREGION;
               if(empty($lt->logo_ligue))
                    $lt->logo_ligue = 'default_logo.png';
               if( empty($lt->img_region))
                    $lt->img_region = 'default_region.png';
          }
          $action = route('admin.fmbb.add-region');
          $action_update = route('admin.fmbb.update-region');
     	return view('admin.fmbb.region',compact('lists','action','modal','action_update','option'));
     }

     /**
     * create add new Region
     *
     * @param Illuminate\Http\Request $request
     * @return void
     */

     public function create(Request $request)
     {
     	try{
               $validation = $this->validate($request,['president' => 'required'],['required' => 'Le champ :attribute est obligatoire']);
               $new = new Region();
               //instance ImagesController
               $image = new ImagesController();
               $image->chemin = '/images/regions/';
               //verifier si Ce president existe deja 
               if( $this->region->authorized($request) )
               {
                    $new->president = $request->president;
               }
               //verifier si ce ligue existe dans la BDD
               if( $this->region->existed($request) )
               {
                    $new->libelle = $request->region;
                    if( $request->logo )
                         $new->logo_ligue = $image->uploadSimple($request->logo);
                    if( $request->file )
                         $new->img_ligue = $image->uploadSimple($request->file);
               }
               $new->save();
               return back()->with('success',"La region et le president de la ligue a été ajouté avec succès" );
          }
          catch (Exception $e)
          {
               report($e);
               return back()->with('error',"Une erreur s'est produite, Veuillez réessayer ultéreurement ! ");
          }
     }

     /**
     * edit Region
     *
     * @param Illuminate\Http\Request $request
     * @return void
     */

     public function edit(Request $request)
     {
          try
          {
          $validation = $this->validate($request,['region' => 'required'],['required' => 'Le champ :attribute est obligatoire ']);
          //instance ImagesController to upload Image
          $image = new ImagesController();
          $image->chemin = 'images/regions/';

          $update = Region::where('idregion',$request->id)->first();
          $update->libelle = $request->region;
          $update->president = $request->noms;
          if( $request->logo )
          {
               $new_logo_ligue = $image->uploadSimple($request->logo);
               if( !empty($update->logo_ligue) && !is_null($update->logo_ligue) )
               {
                    File::delete(public_path().'assets/images/regions/'.$update->logo_ligue);
               }
               $update->logo_ligue = $new_logo_ligue;
          }
          if( $request->img )
          {
               $new_img_region = $image->uploadSimple($request->img);
               if( !empty($update->img_region && !is_null($update->img_region) ))
               {
                    File::delete(public_path().'assets/images/regions/'.$update->img_region);
               }
               $update->img_region = $new_img_region;
          }
          $update->idregion = $request->id;
          //update region
          Region::where('idregion',$request->id)->update(json_decode(json_encode($update),true));

          return back()->with('success',"La region a été modifiée avec succés");
          }
          catch(Exception $e)
          {
               report($e);
               return back()->with('error',"Une erreur s'est produite, Veuillez réessayer ulterieurement ! ");
          }
     }

     /**
     * delete information of region
     * 
     * @param \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */

     public function delete($id)
     {
          try{
               $region = Region::where('idregion',$id)->first();
               $nom_region = $region->LIBELLE;
               $region->delete();
               return back()->with('success','Les informations concernant la region '.$nom_region.' a été supprimé' );
          }
          catch(Exception $e)
          {
               report($e);
               return back()->with('error',"Une erreur s'est produite ! <br> Veuillez réessayer ulterieurement !");
          }
     }

     /**
     * get region to Front-end
     *
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */

     public function getRegion()
     {
          //configuration du site
          $parameters = ManagersInfo::index();
          $logo = $this->page->getlogo();
          //get listes des regions et presidents
          $datas = Region::orderBy('libelle','asc')->get();
          foreach ($datas as $value) 
          {
               if(empty($value->img_region))
                    $value->img_region = 'default_region.png';
               if(empty($value->logo_ligue))
                    $value->logo_ligue = 'default_logo.png';
          }

          $titre = 'Les dirigeants de chaque ligue régional';
          $contenu = $titre;
          $tags = 'ligues, ligue, president, Madagascar, fmbb, fédération malagasy du basket-ball';
          $time = date('Y-m-d H');

          $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.comite.executif'),$time);
          return view('front.region.index',compact('seo','titre','tags','contenu','time','datas','parameters','logo'));

     }
}
