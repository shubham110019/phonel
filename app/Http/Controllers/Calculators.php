<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Single;
use App\Tabmodel;
use App\Phonebooksub;

class Calculators extends Controller
{
    public function cal($id)
    {
    	$data = Single::where('id', $id)->get();		
		return view('calculator',['data' => $data]);
    }

     public function tabletcal($id)
    {
    	$data = Tabmodel::where('id', $id)->get();		
		return view('calculator2',['data' => $data]);
    }

    public function uphones(Request $req){

        $uphone = new Phonebooksub();        
        $uphone->display = $req->input('display');
        $uphone->Screen = $req->input('Screen');

        $uphone->Power = $req->input('Power');
        $uphone->Charging = $req->input('Charging');
        $uphone->Front = $req->input('Front');
        $uphone->Back = $req->input('Back');
        $uphone->Battery = $req->input('Battery');
        $uphone->Speaker = $req->input('Speaker');
        $uphone->Volume = $req->input('Volume');
        $uphone->Wifi = $req->input('Wifi');

        $uphone->fingerlock = $req->input('fingerlock');
        $uphone->facelock = $req->input('facelock');

        $uphone->Charger = $req->input('Charger');
        $uphone->Earphone = $req->input('Earphone');
        $uphone->box = $req->input('box');
        $uphone->good = $req->input('good');
        $uphone->average = $req->input('average');
        $uphone->Belowaverage = $req->input('Belowaverage');
        $uphone->name = $req->input('name');
        $uphone->phone = $req->input('phone');
        $uphone->address = $req->input('address');
        $uphone->a1 = $req->input('a1');
        $uphone->email = $req->input('email');
        $uphone->bill1 = $req->input('bill1');
        $uphone->bill2 = $req->input('bill2');
        $uphone->bill3 = $req->input('bill3');
        $uphone->bill4 = $req->input('bill4');
        $uphone->pin = $req->input('pin');
        $uphone->title = $req->input('title');
        $uphone->type= 'mobile';
        $uphone->usernum= 0;



        $uphone->save();
       // return redirect()->back()->with('success', 'Delete Blog');
        return redirect('action');

    } 

    public function utablets(Request $req){

           $utablet = new Phonebooksub();        
        $utablet->display = $req->input('display');
        $utablet->Screen = $req->input('Screen');

        $utablet->Power = $req->input('Power');
        $utablet->Charging = $req->input('Charging');
        $utablet->Front = $req->input('Front');
        $utablet->Back = $req->input('Back');
        $utablet->Battery = $req->input('Battery');
        $utablet->Speaker = $req->input('Speaker');
        $utablet->Volume = $req->input('Volume');
        $utablet->Wifi = $req->input('Wifi');

         $utablet->fingerlock = $req->input('fingerlock');
        $utablet->facelock = $req->input('facelock');
        
        $utablet->Charger = $req->input('Charger');
        $utablet->Earphone = $req->input('Earphone');
        $utablet->box = $req->input('box');
        $utablet->good = $req->input('good');
        $utablet->average = $req->input('average');
        $utablet->Belowaverage = $req->input('Belowaverage');
        $utablet->name = $req->input('name');
        $utablet->phone = $req->input('phone');
        $utablet->address = $req->input('address');
        $utablet->a1 = $req->input('a1');
        $utablet->email = $req->input('email');
        $utablet->bill1 = $req->input('bill1');
        $utablet->bill2 = $req->input('bill2');
        $utablet->bill3 = $req->input('bill3');
        $utablet->bill4 = $req->input('bill4');
        $utablet->pin = $req->input('pin');
        $utablet->title = $req->input('title');
        $utablet->type= 'tablet';
        $utablet->usernum= 0;



        $utablet->save();
        //return redirect()->back()->with('success', 'Delete Blog');
         return redirect('action');
    }
}
