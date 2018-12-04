<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\HasRelationships;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use function PHPSTORM_META\type;

class Congreso extends Model
{
    //
use HasRelationships, RalationShipsTrait;
  function getCampos(){

     $columnas = Schema::getColumnListing($this->getTable());
     $data = array();


     foreach ($columnas as $columna){
        //$type = $columna->getType();
        $data = array_add($data, $columna, DB::getSchemaBuilder()->getColumnType($this->getTable(),$columna));
     }


     return $data;

  }

  function topicos(){
     return $this->hasMany('App\Topicos', 'id_congreso','id');
  }


}
