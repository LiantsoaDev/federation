<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = "membres";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['image','paragraphe','options'];
}
