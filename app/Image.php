<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Image extends Model
{
    protected $fillable = ['urlimages','urlvideo','options','urlcouverturevideo','imagereference','view'];

    /**
    * fonction recherche image
    * @param string $image
    * @return Collection Object
    */
    public function getImagesByid($image)
    {
    	return self::where('id',$image)->first();
    }

    /**
    * fonction update Image
    * @param string $idImage, Array $arryColumns
    * @return Collection Object Image
    */
    public function updateImageBy($idImage, $arrayColumns)
    {
    	return self::where('id',$idImage)->update($arrayColumns);
    }

    /**
     * Default Avatar Image
     *
     * @var null
     */

    public static function default()
    {
        return 'default_avatar.png';
    }

    /**
    * get statut de l'Affichage
    *
    * @param Illuminate\Database\Eloquent\Model $value
    * @return void
    */

    public function affichage($value)
    {
        if( $value == 0 )
          return '<div class="label label-table label-dark">Inactive</div>';
        elseif($value == 1)
          return '<div class="label label-table label-success">Active</div>';
    }

    /**
    * Action image Cover
    *
    * @var value
    * @return void
    */

    public function action($value)
    {
        if( $value == 0 )
            return null;
        elseif( $value == 1 )
            return 'disabled';
    }

    /**
    * valeur par defaut pour Couverture Image
    *
    * @param value
    * @return void
    */

    public function defaultCover()
    {
        return 'header_player.png';
    }

    /**
    * get urlimage Cover/Logo
    *
    * @var $value
    * @return void
    */

    public function geturlimage($object)
    {
      if( $object->options == 'cover')
        return asset('assets/images/samples/uploads/'. $object->urlimages);
      elseif( $object->options == 'logo')
        return asset('assets/images/'. $object->urlimages);
    }

    /**
    * get logo default
    *
    * @return void
    */

    public static function defaultlogo()
    {
      return 'logo-fmbb.png';
    }
}
