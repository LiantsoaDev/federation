<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Socialmedia;
use App\Configsite;

class ManagersInfo extends Controller
{

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public function __construct()
    {
        //
    }

    /**
    * Create a new controller instance.
    *
    * @return void
    */

    public static function index()
    {
        $social['media'] = Socialmedia::get(['libelle','link','class']);
        $meta = Configsite::first(['email','contact','titre','description','favicon','tags']);
        $meta->favicon = Configsite::getfavicon($meta->favicon);
        $array = array_merge( json_decode(json_encode($social),true) , json_decode(json_encode($meta),true) );
         return json_decode(json_encode($array),false);
    }

}
