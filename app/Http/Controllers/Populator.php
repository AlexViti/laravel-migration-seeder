<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class Populator extends Controller
{
  public function populate() {
    $trains = [
      [
        'company' => 'TrenItalia',
        'code' => '1234',
        'departure_station' => 'Roma',
        'arrival_station' => 'Milano',
        'departure_time' => '2022-05-06 12:00:00',
        'arrival_time' => '2022-05-06 13:00:00',
        'coaches' => 2, 'seats' => 100
      ],
      [
        'company' => 'Italo',
        'code' => '1235',
        'departure_station' => 'Milano',
        'arrival_station' => 'Roma',
        'departure_time' => '2022-05-06 13:00:00',
        'arrival_time' => '2022-05-06 14:00:00',
        'coaches' => 2, 'seats' => 100
      ]
    ];

    foreach ($trains as $train) {
      $train = new Train($train);
      $train->save();
    }
  }
}
