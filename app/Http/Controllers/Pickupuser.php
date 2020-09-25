<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phonebook;
use App\PartnerLists;

class Pickupuser extends Controller
{
   	public function pickupid($id)
   	{
   		$data = Phonebook::where('id', $id)->get();    
   		$data2= PartnerLists::all();   
        return view('admin/pickupuser',compact('data','data2'));
   	}

   	public function store(Request $request,$id)
   	{
   		  $phonedit = Phonebook::find($id);  

   		  $phonedit->usernum = $request->input('usernum');

   		  $phonedit->save();
    
        return redirect()->back()->with('success', 'Delete Blog'); 
   	}
}
