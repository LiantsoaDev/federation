<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;
use App\Reglement;

class ReglementsController extends Controller
{
	private $regle;
    private $page;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->regle = new Reglement();
        $this->page = new CoversController();
    }

    /**
     * index of Reglement form.
     *
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response 
     */

    public function index()
    {
    	//
    }

    /**
    * Get a instance of Reglement
    * 
    * @return void
    */

    public function get()
    {
        //configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();

        $datas = Reglement::first();
        $titre = $datas->titre;
        $contenu = $datas->contenu;
        $tags = $datas->tags;
        $time = $datas->updated_at;
        $seo = MetaDatasController::index($titre, $contenu, $tags, route('front.reglement-interieur'), $time);
        return view('front.presentation.index',compact('titre','contenu','tags','time','parameters','logo','seo'));
    }

    /**
    * edit form Reglement
    * 
    * @param Illuminate\Http\Request $request
    * @return Illumninate\Http\Response
    */

    public function edit(Request $request)
    {   
        $datas = Reglement::first();
        $contenu = str_replace("<p>","",$datas->contenu);
        $chaine = str_replace("</p>","",$contenu);
        $datas->contenu = str_replace("<br />", "\n", $chaine);


        $action = route('update.reglement.interieur');
    	return view('admin.fmbb.reglement',compact('action','datas'));
    }

    /**
    * update a instance of Reglement
    * 
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Responce
    */

    public function update(Request $request)
    {
        $validation = $this->validate($request,[
            'titre' => 'required',
            'contenu' => 'required',
            'tags' => 'required'
        ], [
            'required' => 'Le champ suivant est obligatoire'
        ]);

        $reglement = Reglement::findOrFail($request->id);
        $reglement->titre = $request->titre;
        $reglement->contenu = nl2br(htmlspecialchars_decode($request->contenu));
        $reglement->tags = $request->tags;
        if( $reglement->save() )
            return back()->with('success',"Le reglement interieur a été ajouté avec succès ! ");
        else
            return back()->with('error',"Une erreur s'est produite");

    }
}
