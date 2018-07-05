<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class PagesController extends Controller
{
    protected $video;
    protected $xml;
    protected $checked = "checked";

    public function __construct()
    {
    	$this->video = new Video();
        $this->xml = xml_loader_files('videos');
    }

    /**
    * fonction qui liste les videos facebook
    * @param null
    * @return Collection Object Video
    */
    public function showlistesvideos()
    {
        $action = route('admin.video.insert');
        $getlistes = $this->video->getlistesType();
        foreach ($getlistes as $listes) {
            $listes->live = $this->video->getProprieteAttribute($listes);
            $listes->post = $this->video->getPostAttribute($listes->post);
        }
        return view('admin.videos.listvideos',compact('getlistes','action'));
    }

    /**
    * insert a video
    *
    * @param Illuminate\Http\Request $request
    * @return Illuminate\Http\Response
    */

    public function add(Request $request)
    {
        $validation = $this->validate($request,['iframe' => 'required'],['required' => 'Ce champ est obligatoire']);
        $add = $this->video;
        if( preg_match("/iframe/i",$request->iframe) ){
              $iframe = Video::format_link($request->iframe);
              $add->lienvideo = $iframe;
              $add->typevideo = $request->type;
              $add->post = 0;
              if($request->live)
                $add->live = 1;
              else {
                $add->live = 0;
              }
              $add->save();
        return back()->with('success',"La video a été ajouté avec succés");
        }
        else {
            return back()->with('error',"Le lien que vous avez entré, est invalide");
        }

    }

    /**
    * fonction assignation iframe type video
    * @param string $iframeType, string $iframeModel
    * @return null
    */
    public function assignationNewIframe($type,$valeur)
    {
        $sxml = xml_loader_files('videos');
        $personne = $sxml->addChild($type);
        $nom = $personne->addChild('iframe',htmlspecialchars($valeur)); /*utf8_encode*/
        $sxml->asXML(resources_path().'/xml/videos.xml');
        return $sxml;
    }

    /**
    * publier la video
    * @param Illuminate\Http\Request integer $id
    * @return \Illuminate\Http\Response
    */
    public function publishvideo($id)
    {
        return $this->video->where('id',$id)->update(['post' => 1]);
    }

    /**
    * Annuler la publication de la video
    * @param Illuminate\Http\Request integer $id
    * @return Illuminate\Http\Response
    */
    public function annulationPublication($id)
    {
        return $this->video->where('id',$id)->update(['post' => 0]);
    }

    /**
    * Delete a video
    *
    * @param integer
    * @return Illuminate\Http\Response
    *
    */

    public function delete($id)
    {
        $video = Video::where('id',$id)->first();
        $video->delete();
        return back()->with('success',"La video a été supprimé avec succés");
    }

}
