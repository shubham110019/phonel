<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;

class Partners extends Controller
{

	public function index(){

		return view('partner');
	}

    public function store(Request $req) {
		
        $blogadd2 = new Partner();      

        $blogadd2->name = $req->input('name');
        $blogadd2->city = $req->input('city');  
        $blogadd2->phone = $req->input('phone');
        $blogadd2->email = $req->input('email'); 
        $blogadd2->message = $req->input('message'); 

        $blogadd2->save();


return redirect()->back()->with('message', 'your messenger send.');

       // return view('partner')->with('success', 'BLog Insert');
    }
}
