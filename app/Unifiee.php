<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unifiee extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'reglement_unifies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['titre','contenu','tags','options','image','created_at','updated_at'];
}
