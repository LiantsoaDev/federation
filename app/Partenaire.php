<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    
	/**
     * The table associated with the model.
     *
     * @var string
     */

	protected $table = 'partenaires';

	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */

	protected $fillable = ['icone','titre','description','option','created_at','updated_at'];

}
