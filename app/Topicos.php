<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\RelationShipsTrait;

class Topicos extends Model
{
    //

   use RalationShipsTrait;

   function getCampos(){

      $columnas = Schema::getColumnListing($this->getTable());
      $data = array();


      foreach ($columnas as $columna){
         //$type = $columna->getType();
         $data = array_add($data, $columna, DB::getSchemaBuilder()->getColumnType($this->getTable(),$columna));
      }


      return $data;

   }

   public function congreso(){
      return $this->belongsTo('App\Congreso', 'id_congreso', 'id');
   }


}
