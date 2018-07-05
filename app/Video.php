<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Video extends Model
{
    protected $fillable = ['id','lienvideo','typevideo','live','taille','post','created_at','updated_at'];

    /**
    * fonction get tous les videos facebook
    * @param string $typevideo
    * @return Collection Object Video
    */
    public function getvideoByType($typevideo)
    {
    	return self::where('typevideo',$typevideo)->get();
    }

    /**
    * fonction get les listes des types de video
    * @param null
    * @return Collection Object Video
    */
    public function getlistesType()
    {
    	return self::all();
    }

    /**
    * Getter statut video
    * @param string $value
    * @return \Illuminate\Http\Response
    */
    public function getProprieteAttribute($datas)
    {
        if( is_object($datas) ){
            if( $datas->live == '1')
                return '<span class="label label-pink">En Live sur '.$datas->typevideo.'</span>';
             else
                return '<span class="label label-mint">En différé sur '.$datas->typevideo.'</span>';
        }
    }

    /**
    * verifie publication video
    * @param Illuminate\Support\Facades\DB $value
    *
    */
    public function getPostAttribute($value)
    {
        if( $value )
            return "checked='checked'";
        else
            return null;
    }

    /**
    * format string iframe
    *
    * @param string
    * @return Illuminate\Http\Response
    */

    public static function format_link($string)
    {
        $format ="";
        if( preg_match('/ width="560"/',$string) )
        {
            $format = str_replace(' width="560"','',$string);
        }
        if( preg_match('/ height="315"/',$format))
        {
            echo 'condition';
            $format  = str_replace(' height="315"','',$format);
        }

        return $format;
    }
}
