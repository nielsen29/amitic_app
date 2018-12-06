<?php
/**
 * Created by PhpStorm.
 * User: amihealthmel
 * Date: 12/3/18
 * Time: 10:07 AM
 */


namespace App;

use ErrorException;
use Illuminate\Database\Eloquent\Relations\Relation;
use ReflectionClass;
use ReflectionMethod;

trait RalationShipsTrait {

   public function relationships(){

      $model = new static;
      //dd($model);

      $relationships = [];

      foreach ((new ReflectionClass($model))->getMethods(ReflectionMethod::IS_PUBLIC) as $method){

         //dd($method->class);
         //dd($method->getParameters());
         //dd($method->getName());
         //dd(get_class($model));
         if ($method->class != get_class($model) ||
            !empty($method->getParameters()) ||
            $method->getName() == __FUNCTION__ ){

            continue;

         }

         try{

            $return = $method->invoke($model);
            //dd($return);
            if($return instanceof Relation){
               //dd($arr);
               $relationships[$method->getName()] = [
                 'type' => (new ReflectionClass($return))->getShortName(),
                  'model' => (new ReflectionClass($return->getRelated()))->getName(),
                  //'key' => $return->getForeignKey(),
               ];

            }

         }catch (ErrorException $e){

         }

      }

      //dd($relationships);

      return $relationships;

   }





}