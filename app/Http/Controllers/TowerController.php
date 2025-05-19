<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TowerController extends Controller {
  private $aParams = [
    'tower-param_height' => [
      'var' => '48-50',
      'unit' => 'text_unit-m',
    ],
      
    'tower-param_material' => [
    ],
      
    'tower-param_working-temperature' => [//Рабочая температура
      'var' => '-50 / +50',
      'unit' => 'text_unit-degrees', //degrees Celcius
    ],
      
    'tower-param_operating-relative-humidity' => [//Рабочая относительная влажность
      'var' => '>= 100',
      'unit' => 'text_unit-percent',
    ],
      
    'tower-param_thickness-icing' => [//Вышка должна обеспечивать несущую способность при толщине обледенения
      'var' => '>= 19',
      'unit' => 'text_unit-mm',
      'comment_number' => '1'
    ],
      
    'tower-param_scheme' => [
    ],
      
    'tower-param_section-height' => [//Высота секции
      'var' => 3,
      'unit' => 'text_unit-m',
    ],
      
    'tower-param_base-size' => [//Размер основы трехгранной секции
      'var' => '650х650х650',
      'unit' => 'text_unit-mm',
    ],
      
    'tower-param_section-quantity' => [//Количество секций
      'var' => 14,
    ],
      
    'tower-param_reinforced-section-quantity' => [//Количество усиленных секций
      'var' => 2,
    ],

    'tower-param_guywires-tiers-quantity' => [//Количество ярусов стяжек
      'var' => 8,
    ],
      
    'tower-param_wind-pressure' => [//Вышка должна обеспечивать несущую способность при ветровом давлении
      'var' => '<= 600',
      'unit' => 'text_unit-pa',//Па
      'comment' => '*'
    ],
      
    'tower-param_wind-area' => [//Ветровой район эксплуатации
      'var' => 5,
      'comment' => '1'
    ],
      
    'tower-param_responsibility-level' => [//Класс ответственности
      'var' => 'СС1',
      'comment' => '1'
    ],
  ];
  
  public function index() {
    
    return view('tower/tower', ['aParams' => $this->aParams]);
  }
}
