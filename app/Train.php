<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
  protected $fillable = [
    'company',
    'code',
    'departure_station',
    'arrival_station',
    'departure_time',
    'arrival_time',
    'coaches',
    'seats'
  ];
}
