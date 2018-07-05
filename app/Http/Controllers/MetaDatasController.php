<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class MetaDatasController extends Controller
{
    /**
    * A new instance of controller constructor 
    *
    * @var
    * @return Illuminate\Http\Response
    */

    public function __construct()
    {
    	//
    }

    /**
    * A function to manage all meta datas
    *
    * @var 
    * @return Illumninate\Http\Response 
    */

    public static function index( $titre, $contenu, $tags, $url, $time, $image=null )
    {
    	if( is_null($image))
    		$image = Image::defaultlogo();

    	$metadatas = [
          'siteName' => config('app.name'),
          'titre' => $titre,
          'description' => str_limit($contenu,100,' ...'),
          'tags' => $tags,
          'image' => $image,
          'twitterDescription' => str_limit($contenu,100,' ...'),
          'twitterUrl' => $url,
          'publishedTime' => date('d-m-Y',strtotime($time)),
          'modifiedTime' => date('d-m-Y',strtotime($time)),
          'fbnumericId' => null,
          'fbnumericAppId' => null,
          'fbUrlProfile' => null,
          'fbUrlPage' => null
        ];
        return json_decode(json_encode($metadatas),false);
    }
}
