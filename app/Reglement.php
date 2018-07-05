<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reglement extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fmbb_reglement_interieur';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titre','contenu','tags','created_at','updated_at'];
}
