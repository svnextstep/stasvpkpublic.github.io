<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Services\Localization\LocalizationService;
use App\Http\Controllers\IeWarningController;
use App\Http\Controllers\TowerController;
use App\Http\Controllers\LensController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);

    return redirect()->back();
})->name('locale');




if ( strpos(\Request::header("user-agent"), "Trident") !== false || strpos(\Request::header("user-agent"), "MSIE") !== false ) {
  Session::put("ie_browser", true);

  if (!Cookie::has('visited')) {
    Cookie::queue('visited', 'true', 60 * 24 * 365);
  }
}

Route::group(
    [
        'prefix' => LocalizationService::locale(),
        'middleware' => 'setLocale'
    ],
    function () {
Route::get('tmp', function () { return view('tmp'); });
      //Route::get('/', function () { return view('welcome'); });
      Route::get('ie_warning', [IeWarningController::class, 'index'])->name("ie_warning");
      Route::get('/', function () {return view('tvsystem/description');});

      // ABOUT
      Route::get('about/about', function () {return view('about/about');})->name('about');
      Route::get('about/clients', function () {return view('about/clients');})->name('clients');
      Route::get('about/massmedia', function () {return view('about/massmedia');})->name('massmedia');

      // TELESYSTEM
      Route::get('forest/tvsystem/description', function () {return view('tvsystem/description');})->name('ts_descr');
      Route::get('forest/tvsystem/components', function () {return view('tvsystem/tvsystem');})->name('tvsystem');
      Route::get('forest/tvsystem/additional_features', function () {return view('tvsystem/additional_features');})->name('ts_additional');
        
//Route::get('forest/tvsystem/ts_models', [TsModelController::class, 'index'])->name('ts_models');
Route::get('forest/tvsystem/ts_models', function() {return view('tvsystem/models');})->name('ts_models');

Route::get('forest/tvsystem/lenses', [LensController::class, 'index'])->name('lenses');
//Route::get('forest/tvsystem/lenses', function() {return view('tvsystem/lenses');})->name('lenses');
        Route::get('forest/tvsystem/interactive_map', function() {return view('tvsystem/map');})->name('interactive_map');
        Route::get('forest/tvsystem/net', function() {return view('tvsystem/net');})->name('net');
        
        
     // TOWER
      Route::get('forest/tower', [TowerController::class, 'index'])->name('tower');
      Route::get('tower_war', function () {return view('tower/war');})->name('tower_war');
      
      // PROJECTS
      Route::get('forest/photo_traps', function () {return view('projects/photo_traps');})->name('photo_traps');
      Route::get('forest/control_sawmill', function () {return view('projects/control_sawmill');})->name('control_sawmill');

      
      //SERVICE
      Route::get('services', function () {return view('services_list');})->name('services');
      Route::get('services#protection', function () {return view('services_list#protection');})->name('ts_protection');
      
      Route::get('articals', function () {return view('articals');})->name('articals');
      Route::get('contacts', function () {return view('contacts');})->name('contacts');

    }
);




