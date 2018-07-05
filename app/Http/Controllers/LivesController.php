<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Video;
use Crypt;

class LivesController extends Controller
{
    //
    protected $pages;
    protected $video;

    public function __construct()
    {
    	$this->pages = new PagesController();
    	$this->video = new Video();
    }
    
    /**
    * fonction affichage de la page du Live Streaming
    * @param null
     * @return \Illuminate\Http\Response
     */
    public function liveStreaming()
    {
    	$options = 'hide';
    	$texte = "";
    	$titre = "Live Streaming : Rencontre entre Equipe1 et Equipe2";
    	$paragraphe1 = "";
    	$paragraphe2 = "";
    	$iframe = '<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FNEWS9%2Fvideos%2F10155257915802212%2F&show_text=1&width=560" width="700" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" allowFullScreen="true"></iframe>';
    	return view('front.livestreaming',compact('options','titre','paragraphe1','paragraphe2','iframe','texte'));
    }
}
