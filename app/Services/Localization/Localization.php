<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Services\Localization;

/**
 * Description of Localization
 *
 * @author Светлана
 */
class Localization {
  //put your code here
  public function locale() {
    $locale = request()->segment(1, '');
    if ($locale && in_array($locale, config('app.locales'))) {
      return $locale;
    }
    return "";
  }
}
