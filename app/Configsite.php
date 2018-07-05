<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Eloquent model to manage all Site Configuration
class Configsite extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */

     protected $table = 'informations';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */

      protected $fillable = ['id','email','contact','titre','description','favicon'];

      /**
      * getter favicon
      *
      * @var string
      */

      public static function getfavicon($value)
      {
          if( $value == null )
              return asset('assets/images/favicons/favicon.ico');
          else {
              return asset('assets/images/favicons/'.$value);
          }
      }
}
