<?php
/**
 * Created by PhpStorm.
 * User: amihealthmel
 * Date: 12/4/18
 * Time: 9:13 AM
 */

namespace App;

use ErrorException;
use Illuminate\Database\Eloquent\Relations\Relation;
use ReflectionClass;
use ReflectionMethod;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


trait FormTrait{



   public function getCampos(){

      $model = new static;

      $columnas = Schema::getColumnListing($model->getTable());
      $data = array();


      foreach ($columnas as $columna){
         //$type = $columna->getType();
         $data = array_add($data, $columna, DB::getSchemaBuilder()->getColumnType($model->getTable(),$columna));
      }


      return $this->getForm($data);
   }



   public function getForm($data){
      $model = new static;

      $form = [];


      //dd($data);
      foreach ($data as $key => $itemType){
         $type = null;


         switch ($itemType){
            case 'integer':
               $type = 'number';
               array_push($form,["item" =>([
                  'id'=> $key,
                  'name' => $key,
                  'type' => $type
               ])]);
               //dd($type);
               break;

            case 'date':
               $type = 'date';
               array_push($form,["item" =>([
                  'id'=> $key,
                  'name' => $key,
                  'type' => $type
               ])]);
               break;

            case 'string':
               $type = 'text';
               array_push($form,["item" =>([
                  'id'=> $key,
                  'name' => $key,
                  'type' => $type
               ])]);
               break;

            case 'datetime':
               $type = 'date';
               break;

            default:
               $type = 'text';
               break;
         }

         //dd($form);
      }

      return json_encode($form);


   }

}