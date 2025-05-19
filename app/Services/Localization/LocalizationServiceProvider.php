<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Services\Localization;

use Illuminate\Support\ServiceProvider;
/**
 * Description of LocalizationServiceProvider
 *
 * @author Светлана
 */
class LocalizationServiceProvider extends ServiceProvider{
  //put your code here
  public function register () {
    $this->app->bind('Localization', 'App\Services\Localization\Localization');
  }
}
