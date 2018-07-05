<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Eloquent Model to manage Information fmbb
class Information extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
      protected $table = 'fmbb_presentation';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
      protected $fillable = ['titre','presentation','image_cover','images_profil','tags'];
}
