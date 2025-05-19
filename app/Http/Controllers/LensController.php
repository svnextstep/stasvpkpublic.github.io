<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LensController extends Controller
{
  public $aLenses = [
    '1' => [
      'name' => 'Model 1',
      'used_in' => 2000,
      'params' => [
        'diameter' => [
          'value' => 98,
          'unit' => 'text_unit-mm'
        ],
        'lens_focal_length' => [
          'value' => 500,
          'unit' => 'text_unit-mm'
        ],
      ]
    ],
      
    '2' => [
      'name' => 'Model 2',
      'used_in' => 1800,
      'params' => [
        'diameter' => [
          'value' => 72,
          'unit' => 'text_unit-mm'
        ],
        'lens_focal_length' => [
          'value' => 300,
          'unit' => 'text_unit-mm'
        ],
      ]
    ],
      
    '3' => [
      'name' => 'Model 3',
      'used_in' => 1600,
      'params' => [
        'diameter' => [
          'value' => 69,
          'unit' => 'text_unit-mm'
        ],
        'lens_focal_length' => [
          'value' => 280,
          'unit' => 'text_unit-mm'
        ],
      ]
    ],
  ];
  public $aUnits;
  
  public function index() {
     return view('tvsystem/lenses', ['aLenses' => $this->aLenses, 'aUnits' => $this->aUnits]);
   }
}
