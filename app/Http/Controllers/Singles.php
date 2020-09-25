<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Single;
use App\Tabmodel;

class Singles extends Controller
{
    public function singleId($id)
	{
		$data = Single::where('id', $id)->get();
		//return response()->json($data);
		
		return view('single',['data' => $data]);
	}


	 public function tabletsingleId($id)
	{
		$data = Tabmodel::where('id', $id)->get();
		//return response()->json($data);
		
		return view('singles',['data' => $data]);
	}


}
