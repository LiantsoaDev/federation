<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organigramme extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'organigrammes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['titre','organigramme','tags','options','page'];
}
