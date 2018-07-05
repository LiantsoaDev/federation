<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Region extends Model
{
    protected $fillable = ['idregion','libelle','president'];

 	/**
 	* Fonction get information d'une region par idregion
 	* @param integer idregion
 	* @return Collection Object Region
 	*/
 	public function getregion($idregion=null)
 	{
 		if( !is_null($idregion) )
 			return self::where('idregion',$idregion)->first();
 		else
 			return self::all();
 	} 

 	/**
 	* getters and setters 
 	*/
 	public function getLibelleAttribute($value)
 	{
 		if( empty($value) )
 			return 'Madagascar MG';
 		else
 			return $value;
 	}
 	/**
 	* person Authorized
 	* 
 	* @param Illuminate\Http\Request $request
 	* @return boolean 
 	*/

 	public function authorized(Request $request)
 	{
 		if(self::where('president','like','%'.$request->noms.'%')->first())
 			return false;
 		else 
 			return true;
 	}

 	/**
 	* region exist
 	*
 	* @param Illuminate\Http\Request $request
 	* @return boolean 
 	*/

 	public function existed(Request $request)
 	{
 		if( self::where('libelle',$request->region)->first())
 			return false;
 		else
 			return true;
 	}
}
