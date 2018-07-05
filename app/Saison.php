<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saison extends Model
{
    
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'saisons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['id','saison','options','created_at','updated_at'];

}
