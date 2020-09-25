<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phonebook;
use App\Pickphone;
use DB;
use Illuminate\Support\Facades\Auth;


class dash extends Controller
{
    
     public function index($id){
        
        $data = Phonebook::where('id', $id)->get();        
        return view('phonebookuser',['data' => $data]);

    }

    public function Failed($id){

    	 $failedid = Phonebook::find($id); 

    	 $failedid->status = 3;
    	 $failedid->save();
    
        return redirect()->back()->with('success', 'Delete Blog'); 

    }


    public function failedview(){

    		$userid= Auth::user()->id;
            $data = Phonebook::where(['usernum'=> $userid, 'status'=> '3' ])->get();
            return view('faildeview',compact(['data']));

    }

    public function closedview(){

            $userid= Auth::user()->id;
            $data = Phonebook::where(['usernum'=> $userid, 'status'=> '2' ])->get();
            return view('closeddeals',compact(['data']));

    }

    public function userphonecout(){

    	$userid= Auth::user()->id;

    	$d = Phonebook::where(['usernum'=> $userid, 'status'=> '3' ])->count();

    	return view('include/userheader',compact(['d']));

    }

    public function pickupidpro($id){


    	$data = Phonebook::where('id', $id)->get();

    	return view('phonepickup',['data' => $data]);
    }


    public function picksubpro(Request $request,$id){

        $picksu = new Pickphone();  

        $picksu->pmodel = $request->input('pmodel');
        $picksu->name = $request->input('name'); 
        $picksu->phone = $request->input('phone');  
        $picksu->email = $request->input('email');  
        $picksu->address = $request->input('address');  
        $picksu->emi = $request->input('emi');   
             

         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/id/');
            $image->move($destinationPath, $name);
            $picksu->image = $name;
          }

           $picksu->price = $request->input('price'); 





        $picksu->save();

        $failedid = Phonebook::find($id); 

         $failedid->status = 2;
         


         $failedid->save();  



       return redirect()->back()->with('success', 'Delete Blog'); 

    }

}
