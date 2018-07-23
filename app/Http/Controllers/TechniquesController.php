<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ImagesController;
use App\Image;
use App\Technique;
use Validator;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;

class TechniquesController extends Controller
{
    //
  	private $img;
  	private $technique;
    private $page;

  	 /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
        $this->img = new ImagesController();
        $this->technique = new Technique();
        $this->page = new CoversController();
     }

     /**
     * Rendu listes comités technique de la fmbb
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

     public function list(Request $request)
     {
        $post = 40; 
        $modal = 'technique';
        $titre = "Membres du comité Techniques";
        $columns = ['profil','Noms et prénoms','classification','Validation'];
        $getstructure = Technique::all();
        $action = route("admin.fmbb.add-technic");
        $action_update = route("admin.fmbb.update-technic");
        return view('admin.fmbb.structure-view',compact('columns','getstructure','action','action_update','titre','post','modal'));
     }

      /**
     * Rendu create form add comite de la fmbb
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $datas = $request->all();
        $validate = Validator::make($datas,[
            'noms' => 'required',
            'classification' => 'required',
            'validation' => 'required'
        ]);
        if($validate->fails())
          return back()->withErrors($validate)->withInput();

       $struct = $this->technique;
       $struct->noms = $request->noms;
       $struct->classification = $request->classification;
       $struct->validation = $request->validation;

       if( is_null($request->file ))
        $struct->avatarurl = Image::default();
      else{
        $this->validate($request,[ 'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        $struct->avatarurl = $this->img->uploadSimple($request->file);
      }

      $struct->save();
      return back()->with('success',$request->noms . 'a été ajouté en tant que membre executif de la fmbb ! ');

    }

      /**
     * Editer membre du comité technique
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

      public function edit(Request $request)
      {
        $validation = Validator::make($request->all(),[
          'noms' => 'required',
          'classification' => 'required',
          'validation' => 'required'
        ]);

        if($validation->fails())
          return back()->withErrors($validation)->withInput();

        $update = Technique::find($request->id);
        $update->noms = $request->noms;
        $update->classification = $request->classification;
        $update->validation = $request->validation;

        if( !is_null($request->file('file')) ){
          $this->validate($request,[ 'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
          $update->avatarurl = $this->img->uploadSimple($request->file);
        }
        $update->save();
        return back()->with('success',"Le Membre a été modifié avec succès ! <br>");
      }

       /**
     * Supprimer membre du comité technique
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

     public function delete(Request $request)
     {
        $member = Technique::find($request->route('id'));
        $member->delete();
        return back()->with('success',"Le Membre a été supprimé avec succès !");
     }

     /**
     * Get Comite executif
     *
     * @return \Illuminate\Http\Response
     */

     public function getTechnique()
     {
        //configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();
        $titre = 'Les comités techniques de la fédération Malagasy du basket-ball';
        $contenu = $titre;
        $tags = 'comite, techniques,'.date('Y').', fmbb, basket-ball, Madagascar, staff';
        $time = date('Y-m-d H');

        $datas  = Technique::orderBy('id','asc')->get();

        $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.comite.technique'),$time);
        return view('front.comite.technique.index',compact('parameters','logo','titre','contenu','tags','time','seo','datas'));
     }
}
