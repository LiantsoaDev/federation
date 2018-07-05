<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */

     protected $table ='comments';

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */

      protected $fillable = ['name','email','comments','option','user_id','created_at','updated_at'];

}
