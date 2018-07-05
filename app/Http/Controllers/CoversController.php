<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ImagesController;
use App\Image;
use File;

class CoversController extends Controller
{
    //
    private $img;
    private $image;

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct()
    {
      $this->img = new Image();
      $this->image = new ImagesController();
    }

    /**
    * index new controller instance Cover
    *
    * @return void
    */

    public function index()
    {
        $list = Image::where('options','cover')->orWhere('options','logo')->get();
        foreach ($list as $l) {
            $l->affichage = $this->img->affichage($l->view);
            $l->action = $this->img->action($l->view);
            $l->urlimage = $this->img->geturlimage($l);
        }
        $action = route('admin.fmbb.cover.add');
        return view('admin.fmbb.cover.index',compact('list','action'));
    }

    /**
    * add new Image Cover
    *
    * @param Illuminate\Http\Request $request
    * @return void
    */

    public function insert(Request $request)
    {
      $messages = [
        'dimensions' => "La taille de l'image doit être au minimum de 571 x 590 px pour une Image de couverture et de 180 x 150 px pour un logo",
        'image' => "Le fichier doit être une image",
        'mimes' => 'Le fichier doit être d\'un de ces types :values.',
        'mimetypes' => 'Le fichier doit être d\'un de ces types :values.'
      ];

      $insert = new ImagesController();
      if($request->type == 'cover')
      {
          $this->validate($request,[
            'file' => 'dimensions:min_width=571,min_height=590|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          ],$messages);

          $insert->chemin = 'assets/images/samples/uploads/';
          $create = $this->img;
          $create->urlimages = $insert->uploadSimple($request->file);
          if( $create->urlimages )
          {
            $create->options = 'cover';
            $create->save();
            return back()->with('success',"L'image de Couverture a été ajouté avec succés");
            exit();
          }
          else {
              return back()->with('error',"Une erreur a été produite, veuillez vérifier vos champs");
          }
      }
      elseif ($request->type == 'logo') {

        $this->validate($request,[
          'file' => 'dimensions:max_width=180,max_height=150|image|mimes:png|max:2048'
        ],$messages);

        $insert->chemin = 'assets/images/';
        $create = $this->img;
        $create->urlimages = $insert->uploadSimple($request->file);
        if( $create->urlimages )
        {
          $create->options = 'logo';
          $create->save();
          return back()->with('success',"Le logo a été ajouté avec succés");
          exit();
        }
        else {
            return back()->with('error',"Une erreur a été produite, veuillez vérifier vos champs");
        }
      }

    }

    /**
    * Delete Image Cover
    *
    * @param Illuminate\Http\Request $request
    * @return view
    */

    public function delete($id)
    {
      $images = Image::findOrFail($id);
      if($images->options == 'cover')
      {
          File::delete(public_path() . '/assets/images/samples/uploads/'. $images->urlimages);
      }
      elseif($images->options == 'logo') {
          File::delete(public_path() . '/assets/images/'. $images->urlimages);
      }
      $images->delete();
      return back()->with('success',"L'image a été supprimé avec succés");
    }

    /**
    * function apply Image Cover
    *
    * @param Illuminate\Http\Request $request
    * @return void
    */

    public function apply($id)
    {
        $last = Image::where('view',1)->first();
        if( !array_is_empty($last) )
        {
            if($last->view == 1)
            {
                $last->view = 0;
                $last->save();
            }
        }

        $cover = Image::findOrFail($id);
        if($cover->view == 0)
        {
          $cover->view = 1;
          $cover->save();
        }
        return redirect()->back();
    }

    /**
    * get image premier plan
    *
    * @return void
    */

    public function getpremierplan()
    {
        return Image::where('options','cover')->where('view',1)->first();
    }

    /**
    * get logo in Frontoffice
    *
    * @return void
    */

    public function getlogo()
    {
        $logo =  Image::where('options','logo')->where('view',1)->first();
        if($logo){
          return $logo->urlimages;
        }
        else
          return Image::defaultlogo();
    }
}
