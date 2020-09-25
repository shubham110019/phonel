<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;
use App\Modell;
use App\Repairbooks;
use DB;

class Repairs extends Controller
{
    public function viewephone()
    {
    	$data= Phone::all();
    	return view('repair',['data'=>$data]);
    }

       public function repairviewid($category)
    {
        $data = Modell::where('category', $category)->get();       
        return view('repairview',['data' => $data]);
    }

         public function repaircal($id)
    {
    	$data = Modell::where('id', $id)->get();		
		return view('calculator3',['data' => $data]);
    }

      public function urepair(Request $req){

        $uphone = new Repairbooks();        
        $uphone->display = $req->input('display');
        $uphone->Screen = $req->input('Screen');

         $uphone->fingerlock = $req->input('fingerlock');
          $uphone->facelock = $req->input('facelock');

        $uphone->Power = $req->input('Power');
        $uphone->Charging = $req->input('Charging');
        $uphone->Front = $req->input('Front');
        $uphone->Back = $req->input('Back');
        $uphone->Battery = $req->input('Battery');
        $uphone->Speaker = $req->input('Speaker');
        $uphone->Volume = $req->input('Volume');
        $uphone->Wifi = $req->input('Wifi');
       
        $uphone->name = $req->input('name');
        $uphone->phone = $req->input('phone');
        $uphone->address = $req->input('address');
       
        $uphone->email = $req->input('email');     
        $uphone->pin = $req->input('pin');
        $uphone->title = $req->input('title');      



        $uphone->save();
        //return redirect()->back()->with('success', 'Delete Blog');
         return redirect('action');

    } 

    public function repbook(){

        $data = Repairbooks::orderBy('id','desc')->get();
        return view('admin/repairbooks',compact(['data']));

    }

    public function repdelete($id){

        DB::delete('delete from repairbook where id = ?',[$id]); 
        
    
        return redirect()->back()->with('success', 'Delete phone cat');  

    }
}
