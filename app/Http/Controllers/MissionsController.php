<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ImagesController;
use App\Services\PayUService\Exception;
use App\Http\Controllers\MetaDatasController;
use App\Http\Controllers\CoversController;
use App\Mission;
use App\Image;
use Validator;
use File;

class MissionsController extends Controller
{
    //
    private $mision;
    private $image;
    private $page;

     /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {
     	$this->mission = new Mission();
     	$this->image = new ImagesController();
      $this->page = new CoversController();
     }

     /**
     * Rendu index controller Mission
     *
     * @return  Illuminate\Http\Response
     *
     */

     public function index()
     {
     	$datas = Mission::first();
      $datas->contenu = str_replace("<br />","\n",$datas->contenu);
     	return view('admin.fmbb.mission',compact('datas'));
     }
      /**
     * Rendu edit Mission & Attribution
     *
     * @param Illuminate\Http\Request $request
     * @return  Illuminate\Http\Response
     */

      public function edit(Request $request)
      {
      	try{
	      	$messages = ['required' => "Le champ :attribute n'est pas valide"];
	      	$validate = Validator::make($request->all(),[
	      		'title' => 'required',
	      		'content' => 'required'
	      	],$messages);

	      	if($validate->fails())
	      		return back()->withErrors($validate)->withIput();

	      	$edit = Mission::find($request->id);
          if( is_null($edit) )
            $edit = new Mission();

	      	$edit->titre = $request->title;
	      	$edit->contenu = nl2br($request->content);
          $edit->tags = $request->tags;
	      	if(!is_null($request->file))
	      	{
	      		if(!is_null($edit->images)){
              File::delete(public_path() . '/images/uploads/'. $edit->images);
            }
	      		$this->validate($request,[ 'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
		        $edit->images = $this->image->uploadSimple($request->file);
	      	}
	      	$edit->save();
	      	return back()->with('success',"La page <b> Missions et Attribution </b> a été modifé correctement !");
      }
      catch (Exception $e)
      {
      	return back()->with('error',"Une erreur s'est produite ! Veuillez réessayer");
      }
  }

    /**
     * Rendu get a instance of Mission
     *
     * @return  Illuminate\Http\Response Response
     *
     */

    public function getmission()
    {
        //configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();

        $getMission = Mission::first();
        $titre = $getMission->titre;
        $contenu = $getMission->contenu;
        $tags = $getMission->tags;
        $time = $getMission->updated_at;
        $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.missions-attributions'),$time);
        return view('front.presentation.index',compact('seo','presentation','parameters','logo','titre','contenu','tags','time'));
    }

}
