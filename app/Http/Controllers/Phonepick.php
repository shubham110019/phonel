<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pickphone;
use App\Phonebook;
use DB;
use Illuminate\Support\Facades\Auth;

class Phonepick extends Controller
{
    public function pick(){
    	$data = Pickphone::all();
		return view('admin/pickview',compact(['data']));
    }

     public function index($id){
    	
    	$data = Phonebook::where('id', $id)->get();
        
        return view('admin/pickadd',['data' => $data]);

    }

     public function store(Request $request) {

        $picksu = new Pickphone();        
        $picksu->pmodel = $request->input('pmodel');
        $picksu->name = $request->input('name'); 
        $picksu->phone = $request->input('phone');  
        $picksu->email = $request->input('email');  
        $picksu->address = $request->input('address');  
        $picksu->emi = $request->input('emi');   
        $picksu->price = $request->input('price');       

        

        $picksu->save();

        return redirect()->back()->with('success', 'Delete Blog'); 
            
    }

    public function pickdelete($id){

    	DB::delete('delete from pick where id = ?',[$id]); 
        
 	
    	return redirect()->back()->with('success', 'Delete Blog');   
    }

    public function phonebuser(){


        $userid= Auth::user()->id;
        $data = Phonebook::where('usernum', $userid)->get();
        
        
       return view('home',compact('data'));
       

    }

}
