<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
     * Scope a query to filter DBBuilder.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */

     public function filters(Request $request)
     {
          $requete = $this->query;
          if( !empty($request->categorie) )
               $requete = $requete->where('categories.libellecategorie',$request->categorie);
          if( !empty($request->date) )
               $requete = $requete->where('palmares.date','like','%'.$request->date.'%');
          if( !empty($request->trophy) )
               $requete = $requete->where('palmares.prix','like','%'.$request->trophy.'%');
          if( !empty($request->genre) )
               $requete = $requete->where('palmares.genre',$request->genre);

          return $requete;

     }
}
