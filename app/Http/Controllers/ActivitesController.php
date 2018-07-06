<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activite;
use App\Saison;
use Carbon\Carbon;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;

class ActivitesController extends Controller
{
    
    private $activite;
    private $saison;
    private $page;
    private $first;
    public $season = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {
     	$this->activite = new Activite();
          $this->saison = new Saison();
          $this->page = new CoversController();
          $this->first = new HomeController();

     }

     /**
     * index of /ActivitesController 
     *
     * @param String $saison
     * @return Illuminate\Http\Response
     */

     public function index()
     {
     	$data = $this->activite->findprogramm();
          $listsaison = Saison::all();
     	return view('admin.fmbb.activite.index',compact('data','listsaison'));
     }

     /**
     * form to update a instance of Activite
     *
     * @param Illuminate\Http\Request 
     * @return Illuminate\Http\Response 
     */

     public function edit()
     {    
          $action = action('ActivitesController@insert');
     	return view('admin.fmbb.activite.edit',compact('action'));
     }

     /**
     * insert a instance of Activite
     *
     * @param Illuminate\Http\Request $request
     * @return Illunminate\Http\Response
     */

     public function insert(Request $request)
     {
          $validation = $this->validate($request,[
               'start' => 'required',
               'end' => 'required',
               'contenu' => 'required',
               'lieu' => 'required',
               'tags' => 'required'
          ],['required' => 'Ce champ est obligatoire']);

          $insert = new Saison();
          $insert->saison = $request->saison;
          $insert->debut = date('Y-m-d',strtotime($request->start));
          $insert->fin = date('Y-m-d',strtotime($request->end));
          $insert->save();
          $activity = new Activite();
          $activity->contenu = $request->contenu;
          $activity->tags = $request->tags;
          $activity->lieu = $request->lieu;
          $activity->saison_id = $insert->id;
          $activity->save();
          return back()->with('success',"Le programme pour la saison ".$insert->saison." a été inséré avec succés !");
     }

     /**
     * show form edit instance of Activite
     *
     * @return void
     */

     public function show($id)
     {
          $get = Saison::findOrFail($id);
          $saison = $get->saison;
          $data = $this->activite->getOneProgramm($id);
          $action = action('ActivitesController@update');
          return view('admin.fmbb.activite.edit',compact('action','saison','data'));
     }

     /**
     * update a instance of Activite
     *
     * @param Illuminate\Http\Request 
     * @return Illuminate\Http\Response
     */

     public function update(Request $request)
     {
          $validation = $this->validate($request,[
               'start' => 'required',
               'end' => 'required',
               'contenu' => 'required',
               'lieu' => 'required',
               'tags' => 'required'
          ],['required' => 'Ce champ est obligatoire']);

          $updateSaison = Saison::find($request->id);
          $updateSaison->debut = date('Y-m-d',strtotime($request->start));
          $updateSaison->fin = date('Y-m-d',strtotime($request->end));
          $updateSaison->save();
          $updateActivite = Activite::find($request->id);
          $updateActivite->contenu = $request->contenu;
          $updateActivite->tags = $request->tags;
          $updateActivite->lieu = $request->lieu;
          $updateActivite->save();
          return back()->with('success',"La modification du Programme a été effectué avec succès !");
     }

     /**
     * Ajax - listes des programmes d'activites par saison
     *
     * @param Illuminate\Http\Request 
     * @return Illuminate\Http\Response
     */

     public function getByAjaxSeason($saison)
     {
          $data = $this->activite->findprogramm($saison);
          echo view('admin.fmbb.activite.page-ajax',compact('data'));
     }

     /**
     * Delete a instance of Activite
     *
     * @param Illuminate\Http\Request $id
     * @param Illuminate\Http\Response
     */

     public function delete($id)
     {
          try{
               $activite = Activite::findOrFail($id);
               $activite->delete();
               $saison = Saison::findOrFail($id);
               $saison->delete();
               return back()->with('success',"Le programme a été supprimé avec succès !");
          }
          catch (Exception $e){
               report($e);
               return back()->with('error',"Une erreur s'est produite");
          }
          
     }

     /**
     * Get all  Programmes d'activites in Front
     *
     * @return Illuminate\Http\Response
     */

     public function getactivite()
     {    
          //configuration du site
          $parameters = ManagersInfo::index();
          $logo = $this->page->getlogo();

          //Get programme d'activite
          $data = $this->activite->findprogramm($this->season);
          foreach($data as $value)
          {
               $current = $value->saison;
          }
          $getsaison = Saison::get(['saison']);
          foreach ($getsaison as $key => $value) {
               $values[] = $value->saison;
          }
          $saison = array_unique($values);
          $titre = "Programme d'activite : Saison " . $current;
          $contenu = "le Programme d'activite de la saison ". $current. " de la fédération Malagasy du basket-ball ";
          $tags = "fmbb, Programme d'activité, saison, Compétition, match, ". $current;
          $time = date('d-m-Y');

          //articles du mois et de la semaine
          $launes = $this->first->alaune();
          $unes = ArticlesController::attribution($launes,150);

          $leweek = $this->first->getarticleweek($launes);
          $week = ArticlesController::attribution($leweek,350);

          $lemois = $this->first->getarticlemois($launes,$leweek);
          $mois = ArticlesController::attribution($lemois,350);

          //calendrier
          $calendar = ['01' => 'Janvier', '02' => 'Février', '03' => 'Mars', '04' => 'Avril', '05' => 'Mai', '06' => 'Juin', '07' => 'Juillet', '08' => 'Août', '09' => 'Septembre', '10' => 'octobre', '11' => 'Novembre', '12' => 'Décembre' ];


          $seo = MetaDatasController::index($titre, $contenu, $tags, route('front.programme.activite'), $time);
          return view('front.activite.index',compact('seo','data','parameters','logo','titre','contenu','tags','time','current','saison','week','mois','calendar'));
     }

     /**
     * get another programm from over season
     *
     * @param \Illuminate\Http\Request
     * @param \Illuminate\Http\Response
     */

     public function getanothersaison($saison)
     {
          $this->season = $saison;
          return $this->getactivite();
     }
}
