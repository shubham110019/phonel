<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabletcat;
use App\Brand;
use App\Laptopcats;
use App\Modell;
use App\Tabmodel;

class Catsubs extends Controller
{
    public function phonecat(){    	
    	$data1 = Brand::count();
    	$data2 = Tabletcat::count();
    	$data3 = Laptopcats::count();
		return view('admin/allcategory',compact(['data1','data2','data3']));
    }

    public function devicecount(){    	
    	$data4 = Modell::count();
    	$data5 = Tabmodel::count();
    	$data6 = Laptopcats::count();
		return view('admin/alldevice',compact(['data4','data5','data6']));
	}
	
}
