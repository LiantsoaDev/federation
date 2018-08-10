<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Organigramme;
use App\User;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\ManagersInfo;
use App\Http\Controllers\CoversController;
use App\Http\Controllers\MetaDatasController;
use Auth;
use File;

class MembresController extends Controller
{
    /**
    * Private variable for instance
    *
    */

    private $membre;
    private $page;

    /**
    * a new instance of Membre
    *
    * @return void 
    */

    public function __construct()
    {
        $this->page = new CoversController();
    }

    /**
    * Display a controller of Membres
    *
    * @return \Illuminate\Http\Response
    */

    public function index()
    {
        $organigramme = Organigramme::where('page',route('front.membre.index'))->first();

        $datas = Member::first();
        if( !is_null( $req = User::where('role','president')->first() ))
            $user = $req;
        else{
            $user['name'] = "Utilisateur de la FMBB";
            $user['email'] = "managing-tana@moov.mg";
            $user = json_decode(json_encode($user),false);
        }
           
        if( $organigramme->organigramme)
            $image = asset('images/organigramme/'.$organigramme->organigramme);
        else
            $image = asset('/images/img-default.png');
    	$action = action('MembresController@update');

    	return view('admin.membre.index',compact('action','image','datas','user','organigramme'));
    }

    /**
    * Action update a controller of Membre
    *
    * @param \Illuminate\Http\Request
    * @return \Illuminate\Http\Response
    */

    public function update(Request $request)
    {
        try{
        $validation = $this->validate($request,
            ['paragraphe' => 'required', 'file' => 'dimensions:min_width=30,min_height=30|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
            ['required' => 'Le champ :attribute est obligatoire']
        );
        if( !empty($request->id) )
            $instance = Member::findOrFail($request->id);
        else
            $instance = new Member();

        if( $request->file ){
            if( !empty($instance->image) )
                File::delete(public_path().'/images/membres/'.$instance->image);

            $image = new ImagesController();
            $image->chemin = '/images/membres';
            $instance->image = $image->uploadSimple($request->file);
        }
        $instance->paragraphe = $request->paragraphe;
        $instance->user_id = Auth::user()->id;
        $instance->save();
        return back()->with('success',"La Page Membre de la fédération a été modifié avec succés");
        }
        catch (Exception $e)
        {
            report($e);
        }

    }

    /**
    * Display Front-Office. : Membre de la fmbb
    *
    * @return \Illuminate\Http\Response
    */

    public function getMember()
    {
        //configuration du site
        $parameters = ManagersInfo::index();
        $logo = $this->page->getlogo();
        //get Membre
        $membre = Member::first();
        //get User Président
        $request = User::where('role','president')->first();
        if( !empty($request))
            $user = $request;
        else{
            $user['name'] = "Le président de la Fédération Malagasy du Basket-ball";
            $user['email'] = "managing-tana@moov.mg";
            $user['role'] = "FMBB";
            $user = json_decode(json_encode($user),false);
        }

        $organigramme = Organigramme::where('page',route('front.membre.index'))->get();
        foreach ($organigramme as $value) {
            $value->user_name = $user->name;
            $value->user_email = $user->email;
            $value->user_img = $membre->image;
            $value->user_role = $user->role;
            $value->paragraphe = $membre->paragraphe;
        }    

        $titre = 'Les membres de la fédération Malagasy du Basket-ball';
        $contenu = $titre;
        $tags = "membres, FMBB, FMBB-IBF, ".date('Y').", Basket-ball, organigramme";
        $time = date('d m Y H');
        $seo = MetaDatasController::index($titre,$contenu,$tags,route('front.membre.index'),$time);

        return view('front.membre.index',compact('seo','organigramme','parameters','logo','titre','contenu','tags','time'));
    }



}
