<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Services\Localization;

use \Illuminate\Support\Facades\Facade;
/**
 * Description of LocalizationService
 *
 * @author Светлана
 */
class LocalizationService extends Facade{
  //put your code here
  protected static function getFacadeAccessor() {
    return "Localization";
  }
}
