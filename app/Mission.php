<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "fmbb_missions";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = ['titre','contenu','tags','images','created_at','updated_at'];

}
