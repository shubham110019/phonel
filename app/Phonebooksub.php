<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phonebooksub extends Model
{
      protected $table ='phone';
     public $timestamps = false;
     protected $fillable = ['display', 'Screen', 'Power', 'Charging', 'Front', 'Back', 'Battery', 'Speaker', 'Volume', 'Wifi', 'Charger', 'Earphone', 'box', 'good', 'average', 'Belowaverage', 'name', 'phone', 'address', 'title', 'a1', 'email', 'bill1', 'bill2', 'bill3', 'bill4', 'pin'];
}
