<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wabc extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'wabc';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $fillable = ['nom','federation','option','licence_id','created_at','updated_at'];

}
