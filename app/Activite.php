<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Activite extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = "fmbb_activites";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['titre','contenu','tags','created_at','updated_at'];

    /**
    * get a Query
    *
    * @param string $saison eg. 2017-2018
	* @return Illuminate\Http\Response 
    */ 

    public static function query()
    {
    	return DB::table('fmbb_activites')->select('*')->join('saisons','fmbb_activites.saison_id','=','saisons.id');
    }

    /**
    * find or Fail a programm
    * 
    * @return void
    */

    public function findprogramm($saison=null)
    {
        if( is_null($saison))
        {
            $current = Carbon::now()->subYear()->year.'-'.Carbon::now()->year;
            $get = self::query()->where('saisons.saison',$current)->get();
        }
        else
        {
            $get = self::query()->where('saisons.saison',$saison)->get();
        }
        return $get;
    }

    /**
    * get One programmme by Id
    *
    * @param integer $id
    * @return Illuminate\Http\Response
    */

    public function getOneProgramm($id)
    {
        return self::query()->where('saisons.id',$id)->first();
    }

}
