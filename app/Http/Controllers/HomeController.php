<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Image;
use App\Video;

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ConfigurationsController;
use App\Http\Controllers\CoversController;

use App\Http\Controllers\ManagersInfo;

use Carbon\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    protected $art;
    protected $img;
    protected $image;
    protected $article;
    protected $landing;
    protected $cover;
    protected $video;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->art = new Article();
        $this->img = new Image();
        $this->article = new ArticlesController($this->art);
        $this->image = new ImagesController();
        $this->landing = new ConfigurationsController();
        $this->cover = new CoversController();
        $this->video = new Video();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //configuration du site
        $parameters = ManagersInfo::index();
        $landing = $this->landing->getlanding();
        $premierplan = $this->cover->getpremierplan();
        $logo = $this->cover->getlogo();
        //Videos
        $videos = $this->video->getlistesType();

        //articles
        $options = "hide";
        $launes = $this->alaune();
        $unes = ArticlesController::attribution($launes,150);

        $leweek = $this->getarticleweek($launes);
        $week = ArticlesController::attribution($leweek,350);

        $lemois = $this->getarticlemois($launes,$leweek);
        $mois = ArticlesController::attribution($lemois,350);

        $theallarticles = $this->allarticlesdumois($launes);
        $allarticles = ArticlesController::attribution($theallarticles,300);

        return view('front.accueil',compact('unes','week','mois','options','allarticles','landing','premierplan','logo','parameters','videos'));
    }

    /**
    * fonction get article à la Une
    * @param integer $nbreArticleAfficher
    * @return Array $une
    */
    public function alaune($nbre=null)
    {
        if( is_null($nbre))
            $nbre = 5;
        $default = $this->art->getarticleAlaUne($nbre);
        return $default;
    }

    /**
    * fonction article de la semaine
    * @param integer $nbreAffcher
    * @return Collection Object Article
    */
    public function getarticleweek($alaune,$nbre=null)
    {
        $in = [];
        foreach ($alaune as $une) {
            $in[] = $une->id;
        }
        return $this->art->getrticleperweek($in,$nbre);
    }

    /**
    * fonction get article du mois
    * @param integer $nbre
    * @return Collection Object Article
    */
    public function getarticlemois($une,$week)
    {
        $actus =[];
        $semaine = [];
        foreach ($une as  $value) {
            $actus[] = $value->id;
        }
        foreach ($week as $w) {
           $semaine[] = $w->id;
        }
        $exception = array_merge($actus,$semaine);
        return $this->art->getarticleparmois($exception);
    }

    /**
    * fonction get tous les articles du mois sans exception
    * @param null
    * @return Collection Object Article
    */
    public function allarticlesdumois($exception=null)
    {
        if( !is_null($exception) ){
            $ids = [];
            foreach ($exception as $value) {
              $ids[] = $value->id;
            }
        }
        else {
            $ids = null;
        }
        return $this->art->getarticleparmois($ids);
    }
}
