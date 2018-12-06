<?php
/**
 * Created by PhpStorm.
 * User: amihealthmel
 * Date: 12/5/18
 * Time: 8:47 AM
 */

namespace App;


class FormModelView
{

   public function inputText($id, $name, $required){

      return '<input type="text" id="'.$id.'" name="'.$name.'"'.($required ? 'required': null) .'>';

   }

   public function inputCombo($id, $name, $arr, $required){

   }

}