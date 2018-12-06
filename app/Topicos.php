<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\RelationShipsTrait;
use App\FormTrait;

class Topicos extends Model
{
    //

   use RalationShipsTrait, FormTrait;


   public function congreso(){
      return $this->belongsTo('App\Congreso', 'id_congreso', 'id');
   }




}
