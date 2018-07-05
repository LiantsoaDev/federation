<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use App\Socialmedia;

use App\Http\Controllers\ImagesController;
use App\Configsite;
use Validator;
use File;

class InformationDuSitesController extends Controller
{
    //
    private $conf;
    private $img;
    private $image;

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct()
    {
      $this->conf = new ConfigSite();
      $this->img = new Image();
      $this->image = new ImagesController();
    }

    /**
    * index configuration du site
    *
    * @return view
    */

    public function index()
    {
        $configuration = ConfigSite::first();
        $configuration->favicon = $this->conf->getfavicon($configuration->favicon);

        $social = Socialmedia::all();

        $action = route('admin.configsite.base');
        $action_rs = route('admin.configsite.rs');
        return view('admin.siteConfig.index',compact('configuration','action','action_rs','social'));
    }

    /**
    * update configuration du site
    *
    * @param Illuminate\Http\Request $request
    * @return view
    */

    public function update(Request $request)
    {
      $messages = [
        'required' => "Le champ n'est pas valide ! Reverifier vos champs",
        'email' => 'inserer un adresse email valide'
      ];

        $validation = $this->validate($request,[
          'email' => 'email|required',
          'contact' => 'required',
          'titre' => 'required',
          'description' => 'required',
          'tags' => 'required'
        ],$messages);

          if( !is_null($request->id) )
            $insert = Configsite::find(intval($request->id));
          else
            $insert = $this->conf;

          $insert->email = $request->email;
          $insert->contact = $request->contact;
          $insert->titre = $request->titre;
          $insert->description = $request->description;
          $insert->tags = $request->tags;
          if( $request->file('file') )
          {
            if( $insert->favicon ){
              File::delete(public_path().'/assets/images/favicons/'.$insert->favicon);
            }
            $valdiation = $this->validate($request,['file' => 'dimensions:max_width=32,max_height=32|mimes:png,jpg,svg,ico|max:2048'],
            ['file' => 'La taille du Fichier ou l\'extension du fichier n\'est pas valide']);
            $this->image->chemin = '/assets/images/favicons/';
            $insert->favicon = $this->image->uploadSimple($request->file);
          }
          else {
            $insert->favicon = null;
          }
          $insert->save();
          return back()->with('success',"Les informations de base ont été ajoutées avec succès !");
    }

    /**
    * insert Social media
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */

    public function socialmedia(Request $request)
    {
        $array = array_keys($request->all());
        unset($array[0]);

        foreach($array as $val){
            $insert = socialmedia::updateOrCreate(
                      ['libelle' => $val],['link' => $request->input($val)]
            );
      }
        return back()->with('success',"L'ajout des réseaux sociaux ont été effectué avec succès");
    }
}
