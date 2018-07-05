<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landingpage extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'config_landingpages';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = ['titre','urlimage','code','vue','description','updated_at'];

    /**
    * value default Landing Pages
    *
    * @var Default
    */

    public function default()
    {
      return 'header_bg.jpg';
    }

    /**
    * default value to form code
    *
    * @var code
    */

    public function defaultCode()
    {
      return htmlspecialchars('<h5 class="hero-unit__subtitle">F.M.B.B</h5>
      <h4 class="hero-unit__title">Fédération <span class="text-secondary">Malagasy de </span> <span class="text-tertiary"> BasketBall</span> </h4>');
    }

    /**
    * getter statut
    *
    * @var value
    */

    public function ofStatut($value)
    {
      if($value == 0)
        return '<div class="label label-table label-dark">Inactive</div>';
      elseif($value == 1)
        return '<div class="label label-table label-success">Active</div>';
    }

    /**
    * definie l'action du bouton
    *
    * @var value
    */

    public function action($value)
    {
      if($value == 0)
        return null;
      else
        return 'disabled';
    }

}
