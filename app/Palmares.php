<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Palmares extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'palmares';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = ['id','prix','date','option','categorie_id','created_at','updated_at'];

     /**
     * variable private
     * @var query 
     */

     private $query;

     /** 
     * function constructor 
     *
     * @return void
     */

     public function __construct()
     {
          $this->query = $this->getQueryPalmares();
     }

     /**
     * Get attributes Palmares
     *
     * @return void
     */

     public function getQueryPalmares()
     {
     	return DB::table('palmares')->select('*','palmares.id as id_palmares')->join('categories','categories.id','=','palmares.categorie_id');
     }

     /**
     * Scope a query to only category.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */

     public function OfCategory($category=null)
     {
          if( !empty($category) )
               return $this->query->where('categories.libellecategorie',$category);
     }

}
