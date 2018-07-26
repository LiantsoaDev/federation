<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Article;
use Carbon;
use Resize;
use File;
//use Intervention\Image\ImageManagerStatic as Resize;
//use Intervention\Image\Facades\Image as Resize;


class ImagesController extends Controller
{
    protected $image;
    public $chemin = '/images/uploads';
    public $default_width = 773;
    public $default_height = 408;
    protected $articles;

    public function __construct()
    {
    	$this->image = new Image();
        $this->articles = new Article();
    }

    /**
    * fonction principale d'upload et redimensionnement Image
    * @param Request $image
    * @return string $nom_image
    */

    public function uploadAndResizeImage($image,$width=null,$height=null)
    {
    	if( is_null($width) && is_null($height) )
        {
            $width = $this->default_width;
            $height = $this->default_height;
        }

    	$input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path($this->chemin);
        //redimensionner Image
        $image_resize = Resize::make($image->getRealPath());
        $image_resize->resize($width, $height);
        $path = $destinationPath . '/' . $input['imagename'];
        $image_resize->save($path);

        return $input['imagename'];
    }

    /**
    * fonction simple upload image sans redimensionnnement
    * @param Request $request
    * @return string $nomImage
    */
    public function uploadSimple($image,$indice=null)
    {
    	if( is_uploaded_file($image))
    	{
    		$input['imagename'] = time().'-'.$indice.'.'.$image->getClientOriginalExtension();
	        $destinationPath = public_path($this->chemin);
	        $image->move($destinationPath, $input['imagename']);
	        return $input['imagename'];
    	}
    }

    /**
    * fonction suppression d'une image associé à article
    * @param string $nomImage
    * @return view
    */
    public function deleteImage($nomImage,$imageid)
    {
    	$datas = $this->image->getImagesByid($imageid);
        $correspondance = strpos($datas->urlimages, $nomImage);
        if( $correspondance !== false )
        {
            $newchaine = str_replace($nomImage,"",$datas->urlimages);
            $verifdebut = substr($newchaine, -strlen($newchaine),  1);
            if( $verifdebut == '|' ){
                $finalchaine = substr($newchaine, 1);
            }
            elseif(substr($newchaine, -1,  1) == '|' ){
                $finalchaine = substr($newchaine, -strlen($newchaine),  -1);
            }
            else
            {
                $update = str_replace('||',"|",$newchaine);
                $finalchaine = $update;
            }

            File::delete(public_path() . '/images/uploads/'. $nomImage);
            $this->image->updateImageBy($imageid,['urlimages' => $finalchaine]);
            return back()->with('success',"L'Image a été supprimée avec succès ! <br>");
        }
    }

    /**
    * fonction modification Image
    * @param Request $request, integer $idarticle
    * @return boolean
    */
    public function updateUploadImage(Request $request, $idarticle)
    {
        $urimagevideo = $this->articles->detailarticle($idarticle);
        $ancienImage = $urimagevideo->urlcouverturevideo;
        if( $request->file('file') )
        {
            File::delete(public_path().'/images/uploads/'.$ancienImage);
            $this->validate($request, ['file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $image = $request->file('file');
            $nomnouvImage = $this->uploadSimple($image);
            $this->image->updateImageBy(intval($urimagevideo->image_id), ['urlcouverturevideo' => $nomnouvImage ]);
            return true;
        }
        elseif( $request->file('files') )
        {
            $files = $request->file('files');
            $this->validate($request, [ 'files.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            for ($i=0; $i < count($files); $i++) {
                 $images = $files[$i];
                 $listes_noms_images[] = $this->uploadSimple($images,$i);
            }
            $nouvchaines =  implode("|", $listes_noms_images);
            $chaines = $urimagevideo->urlimages. "|" . $nouvchaines;
            $this->image->updateImageBy(intval($urimagevideo->image_id),['urlimages' => $chaines]);
            return true;
        }
        else
            return false;
    }
}
