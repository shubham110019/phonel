<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Phonebook;

class Phonebooks extends Controller
{
    public function book(){

    	$data = Phonebook::orderBy('id','desc')->get();
		return view('admin/phonebooks',compact(['data']));
		
    }

    public function bookdelete($id){    
    	DB::delete('delete from phone where id = ?',[$id]);    	
    	return redirect()->back();
   
    }
}
