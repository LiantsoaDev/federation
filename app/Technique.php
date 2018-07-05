<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technique extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fmbb_technique';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['noms','classification','validation'];

}
