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
use RalationShipsTrait, FormTrait;

  function topicos(){
     return $this->hasMany('App\Topicos', 'id_congreso','id');
  }


}
