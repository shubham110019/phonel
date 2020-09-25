<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PartnerLists;
use DB;

class Partnerlist extends Controller
{
    public function list()
    {
		$data = PartnerLists::all();    
    	return view('admin/partnerview',compact('data'));

    }

    public function delete($id)
    {
    	DB::delete('delete from users where id = ?',[$id]); 
        
 	
    	return redirect()->back()->with('success', 'Delete Blog');   
    }


    
}
