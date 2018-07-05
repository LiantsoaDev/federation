<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;
use App\Image;
use Validator;

class ContenusController extends Controller
{
    //
	private $infos;
  private $img;
  private $page;

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
     	  $this->infos = new Information();
        $this->img = new ImagesController();
        $this->page = new CoversController();
     }

    /**
     * Rendu formulaire pour créer présentation fmbb
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

      public function create(Request $request)
      {
	      	$information = $this->infos;

          $datas = Information::find(1);
					$datas->presentation =  str_replace('<br />', "\n", $datas->presentation);
          $action = route('admin.update.presentation');
	      	return view('admin.fmbb.presentation',compact('information','action','datas'));
      }

    /**
     * Modification des contenus pour créer présentation fmbb
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */

      public function edit(Request $request)
      {
          $validate = Validator::make($request->all() , [
              'titre' => 'required',
              'presentation' => 'required',
              'tags' => 'required'
          ]);

          if( $validate->fails() )
            return back()->withErrors($validate)->withInput();

          $info = Information::find($request->input('id'));
          $info->titre = $request->input('titre');
          $info->presentation = nl2br($request->input('presentation'));
          $info->tags = $request->input('tags');
          $info->save();

          return back()->with('success',"la présentation de la fmbb a été modifiée avec succès !");
      }

    /**
     * get les informations de présentation de la fmbb
     *
     * @param  Illuminate\Http\Request  $request
     * @return Illuminate\Http\Response
     */
    public function getpresentation()
    { 
        //configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();

        $presentation = Information::first();
        $titre = $presentation->titre;
        $contenu = $presentation->presentation;
        $tags = $presentation->tags;
        $time = $presentation->updated_at;

        $seo = MetaDatasController::index($titre, $contenu, $tags, route('front.presentation.fmbb'), $time);
        return view('front.presentation.index',compact('seo','presentation','parameters','logo','titre','contenu','tags','time'));
    }
}
