<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Controllers\ImagesController;
use App\Landingpage;
use App\Image;
use File;

class ConfigurationsController extends Controller
{
    //
    private $landing;
    private $img;
    private $image;

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct()
    {
      $this->landing = new Landingpage();
      $this->img = new Image();
      $this->image = new ImagesController();
    }

    /**
    * index form Configuration
    *
    * @return view
    */

    public function index()
    {
      $datas  = Landingpage::all();
      foreach ($datas as $donnee) {
        $donnee->statut = $this->landing->ofStatut($donnee->vue);
        $donnee->action = $this->landing->action($donnee->vue);
      }
      $action = route('admin.fmbb.add-landing-page');
      return view('admin.fmbb.config.index',compact('datas','action'));
    }

    /**
    * insert landing page
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */

    public function insert(Request $request)
    {
      $messages = [
        'required' => 'le champ :attribute n\'est pas valide '
      ];
        $validation = $this->validate($request,[
          'titre' => 'required'
        ],[
            'required' => "Le champ n'est pas valide"
        ]);

        $insert = new Landingpage();
        $insert->titre = $request->titre;
        $insert->description = $request->description;
        if( $request->code )
        {
            $insert->code = $request->code;
        }
        else {
          $insert->code = $this->landing->defaultCode();
        }
        if($request->file('file'))
        {
          $this->validate($request,[ 'file' => 'dimensions:min_width=1500,min_height=640|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],[
            'dimensions' => "La taille de l'image doit être au minimum de 1500x640px"
          ]);
          $insert->urlimage = $this->image->uploadSimple($request->file);
        }
        else {
          $insert->urlimage = $this->landingpage->default();
        }
        $insert->save();
        return back()->with('success',"Une nouvelle landing Page a été ajouté !");
    }

    /**
    * delete landing page
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */

    public function delete($id)
    {
        $getlanding = Landingpage::findOrFail($id);
        if($getlanding){
            $getlanding->delete();
            return back()->with('success',"Le landing Page a été supprimé avec succés");
        }
        else
          return back()->with('error',"Une erreur a été produite lors de la suppression");
    }

    /**
    * index Configuration Image
    *
    * @return view
    */

    public function imageIndex()
    {
        return view('admin.fmbb.config.img-index');
    }

    /**
    * Apply Configuration landing Page
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */

    public function apply($id)
    {
        $last = Landingpage::where('vue',1)->first();
        if($last)
        {
            $last->vue = 0;
            $last->save();
        }
        $new = Landingpage::find($id);
        $new->vue = 1;
        $new->save();
        return redirect()->back();
    }

    /**
    * fonction get landing page
    *
    * @return void
    */

    public function getlanding()
    {
        return LandingPage::where('vue',1)->first();
    }
}
