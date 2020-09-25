<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File as LaraFile;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tabletcat;
use App\Tabmodel;

class Tabletcats extends Controller
{

      public function tabletviewid($category)
    {
        $data = Tabmodel::where('category', $category)->get();
        //return response()->json($dataphone);
        //$data ="shubham";
        return view('tabletview',['data' => $data]);
    }

       public function tablet()
    {
    	$data= Tabletcat::all();
    	return view('tablets',['data'=>$data]);
    }

    public function tabletcatt()
    {
    	$data = Tabletcat::all();
    	return view('admin/tabletcat',['data'=>$data]);
    }

    public function tabletcatdelete($id){

        $data = Tabletcat::FindOrFail($id); 

        if(file_exists('public/img/cat/'.$data->image) AND !empty($data->image)){ 
            unlink('public/img/cat/'.$data->image);
         } 
            try{

                $data->delete();
                $bug = 0;
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
            } 
            if($bug==0){
                echo "success";
            }else{
                echo 'error';
            }
        

    	DB::delete('delete from tabletcat where id = ?',[$id]); 
        
 	
    	return redirect()->back()->with('success', 'Delete phone cat');   
    }

     public function store(Request $req) {

        $phonec = new Tabletcat();        
        $phonec->title = $req->input('title');
        $phonec->url = $req->input('title');        

         if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/cat/');
            $image->move($destinationPath, $name);
             $phonec->image = $name;
          }

        $phonec->save();

       return redirect()->back();
       // return view('admin/phonecat')->with('success', 'phone cat Insert');
    }

    public function tabletc2()
    {
        $data5 = Tabletcat::all();
       

        return view('admin/addtablet',compact('data5'));
    }


    public function storetable(Request $req) {

        $phonec = new Tabmodel();        
        $phonec->title = $req->input('title');
        $phonec->category = $req->input('cat');
        $phonec->price = $req->input('price');
        $phonec->average = $req->input('average');
        $phonec->belowaverage = $req->input('belowaverage');
        $phonec->display = $req->input('display');
        $phonec->screen = $req->input('screen');  
        $phonec->Power = $req->input('Power');
        $phonec->Charging = $req->input('Charging');
        $phonec->Front = $req->input('Front');
        $phonec->Back = $req->input('Back');
        $phonec->Battery = $req->input('Battery');  
        $phonec->Speaker = $req->input('Speaker');
        $phonec->Volume = $req->input('Volume');
        $phonec->Wifi = $req->input('Wifi');

        $phonec->facelook = $req->input('facelook');
        $phonec->fingerlock = $req->input('fingerlock');

        $phonec->box = $req->input('box');
        $phonec->Earphone = $req->input('Earphone'); 
        $phonec->Charger = $req->input('Charger');
        $phonec->bill1 = $req->input('bill1'); 
        $phonec->bill2 = $req->input('bill2');
        $phonec->bill3 = $req->input('bill3');   
        $phonec->processor = $req->input('processor');
        $phonec->ram = $req->input('ram');
        $phonec->storage = $req->input('storage');
        $phonec->batteryc = $req->input('batteryc');     

         if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/tablet/');
            $image->move($destinationPath, $name);
             $phonec->image = $name;
          }

        $phonec->save();

       return redirect()->back();
      
    }

    public function alltab(){

        $data = Tabmodel::all();
       

        return view('admin/alltablet',compact('data'));

    }
    public function tabdelete($id)
    {
        $data = Tabmodel::FindOrFail($id); 

        if(file_exists('public/img/tablet/'.$data->image) AND !empty($data->image)){ 
            unlink('public/img/tablet/'.$data->image);
         } 
            try{

                $data->delete();
                $bug = 0;
            }
            catch(\Exception $e){
                $bug = $e->errorInfo[1];
            } 
            if($bug==0){
                echo "success";
            }else{
                echo 'error';
            }
        

        DB::delete('delete from tablepost where id = ?',[$id]); 
        
    
        return redirect()->back()->with('success', 'Delete phone cat'); 
    }

      public function tabeditid($id)
    {
        $data = Tabmodel::where('id', $id)->get();

        $data2 = Tabletcat::all();
        
        return view('admin/editphone',compact(['data','data2']));
    }

     public function edittablet(Request $request,$id) {

        $phonedit = Tabmodel::find($id);        
     

        $phonedit->title = $request->input('title');
        $phonedit->category = $request->input('cat');
        $phonedit->price = $request->input('price');
        $phonedit->average = $request->input('average');
        $phonedit->belowaverage = $request->input('belowaverage');
        $phonedit->display = $request->input('display');
        $phonedit->screen = $request->input('screen');  
        $phonedit->Power = $request->input('Power');
        $phonedit->Charging = $request->input('Charging');
        $phonedit->Front = $request->input('Front');
        $phonedit->Back = $request->input('Back');
        $phonedit->Battery = $request->input('Battery');  
        $phonedit->Speaker = $request->input('Speaker');
        $phonedit->Volume = $request->input('Volume');
        $phonedit->Wifi = $request->input('Wifi');

        $phonedit->facelook = $request->input('facelook');
        $phonedit->fingerlock = $request->input('fingerlock');
        
        $phonedit->box = $request->input('box');
        $phonedit->Earphone = $request->input('Earphone'); 
        $phonedit->Charger = $request->input('Charger');
        $phonedit->bill1 = $request->input('bill1'); 
        $phonedit->bill2 = $request->input('bill2');
        $phonedit->bill3 = $request->input('bill3');   
        $phonedit->processor = $request->input('processor');
        $phonedit->ram = $request->input('ram');
        $phonedit->storage = $request->input('storage');
        $phonedit->batteryc = $request->input('batteryc');  

          $data2=$request->input('oldimg');  
         
         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/tablet/');
            $image->move($destinationPath, $name);
             $phonedit->image = $name;

            if(file_exists('public/img/tablet/'.$data2) AND !empty($data2)){ 
                unlink('public/img/tablet/'.$data2);
            } 

         
        }
          


        $phonedit->save();
    
        return redirect()->back()->with('success', 'Delete Blog'); 
            
    }


}
