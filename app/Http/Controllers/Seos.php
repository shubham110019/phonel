<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seo;

class Seos extends Controller
{
    public function seopage(){

    	$seo=Seo::all();

    }
}
