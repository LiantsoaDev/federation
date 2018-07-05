<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Eloquent Model to manage Information fmbb
class Structure extends Model
{
    //
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'fmbb_structure';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['noms','fonctions','contacts','emails','enservices','avatarurl','position_system','post'];

     /**
     * get all members orderBy position_system.
     *
     * @return  Illuminate\Database\Eloquent\Model
     */

     public static function getall()
     {
        return self::orderBy('position_system','asc')->get();
     }
}
