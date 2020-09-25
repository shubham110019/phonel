<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class count extends Controller
{
   public function co()
    {
     $count = Phone::count();



     return view('admin/dashoard',compact(['count']));

 }
}
