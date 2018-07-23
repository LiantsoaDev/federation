<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;
use App\Http\Controllers\ImagesController;
use App\Image;
use Validator;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;

class StructuresController extends Controller
{
    //
	private $structure;
	private $img;
  private $page;

	/**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
        $this->structure = new Structure();
        $this->img = new ImagesController();
        $this->page = new CoversController();
     }

     /**
     * Rendu listes administratifs de la fmbb
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

     public function list(Request $request)
     {
        $post = 40;
        $modal = 'comite';
        $titre = "Membres du comité executif";
        $columns = ['profil','Noms et prénoms','fonctions','Contacts','adresse email','Ajout/Modif/Supp'];
        $getstructure = Structure::getall();
        $action = route("admin.fmbb.addcomity");
        $action_update = route("admin.fmbb.update-comity");
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
            'fonction' => 'required',
            'contact' => 'required',
            'email' => 'required|email'
        ]);
        if($validate->fails())
          return back()->withErrors($validate)->withInput();

       $struct = $this->structure;
       $struct->noms = $request->noms;
       $struct->fonctions = $request->fonction;
       $struct->contacts = $request->contact;
       $struct->emails = $request->email;
       $struct->position_system = $request->position;

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
     * Editer membre du comité executif
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

      public function edit(Request $request)
      {
        $validation = Validator::make($request->all(),[
          'noms' => 'required',
          'fonction' => 'required',
          'contact' => 'required',
          'email' => 'required|email'
        ]);

        if($validation->fails())
          return back()->withErrors($validation)->withInput();

        $update = Structure::find($request->id);
        $update->noms = $request->noms;
        $update->fonctions = $request->fonction;
        $update->contacts = $request->contact;
        $update->emails = $request->email;
        $update->position_system = $request->position;

        if( !is_null($request->file('file')) ){
          $this->validate($request,[ 'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
          $update->avatarurl = $this->img->uploadSimple($request->file);
        }
        $update->save();
        return back()->with('success',"Le Membre a été modifié avec succès ! <br>");
      }

     /**
     * Supprimer membre du comité executif
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

     public function delete(Request $request)
     {
        $member = Structure::find($request->route('id'));
        $member->delete();
        return back()->with('success',"Le Membre a été supprimé avec succès !");
     }

     /**
     * Get Comite executif
     *
     * @return \Illuminate\Http\Response
     */

     public function getExecutif()
     {
        //configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();
        $titre = 'Les comités executifs de la fédération Malagasy du basket-ball';
        $contenu = $titre;
        $tags = 'comite, executif,'.date('Y').', fmbb, basket-ball, Madagascar';
        $time = date('Y-m-d H');

        $datas  = Structure::orderBy('position_system','asc')->get();

        $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.comite.executif'),$time);
        return view('front.comite.executif.index',compact('parameters','logo','titre','contenu','tags','time','seo','datas'));
     }

}
