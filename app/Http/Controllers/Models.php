<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File as LaraFile;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Modell;
use App\Phone;

class Models extends Controller
{
    
	public function modelId($category)
	{
		$data = Modell::where('category', $category)->get();
		//return response()->json($dataphone);
		//$data ="shubham";
		return view('modelview',['data' => $data]);
	}

	public function allPhonep()
	{
		$data1 = Modell::all();
		return view('admin/allphone',compact(['data1']));
	}

	public function catallpro()
	{
		$data5 = Phone::all();
		return view('admin/addphone',compact(['data5']));
	}

	public function phonedelete($id){

        $data = Modell::FindOrFail($id); 

        if(file_exists('public/img/phone/'.$data->image) AND !empty($data->image)){ 
            unlink('public/img/phone/'.$data->image);
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
        

    	DB::delete('delete from posts where id = ?',[$id]); 
        
 	
    	return redirect()->back()->with('success', 'Delete phone cat');   
    }

	 public function store(Request $req) {

        $phonec = new Modell();        
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
            $destinationPath = public_path('img/phone/');
            $image->move($destinationPath, $name);
             $phonec->image = $name;
          }

        $phonec->save();

       return redirect()->back();
      
    }

     public function editid($id)
    {
        $data = Modell::where('id', $id)->get();

        $data2 = Phone::all();
        
        return view('admin/editphone',compact(['data','data2']));
    }



       public function editphone(Request $request,$id) {

        $phonedit = Modell::find($id);        
     

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
            $destinationPath = public_path('img/phone/');
            $image->move($destinationPath, $name);
             $phonedit->image = $name;

            if(file_exists('public/img/phone/'.$data2) AND !empty($data2)){ 
                unlink('public/img/phone/'.$data2);
            } 

         
        }
          


        $phonedit->save();
    
        return redirect()->back()->with('success', 'Delete Blog'); 
            
    }


}
