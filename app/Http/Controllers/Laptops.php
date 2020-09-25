<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File as LaraFile;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Laptopcats;
use App\Laptoppost;

class Laptops extends Controller
{

     public function laptopcat2()
    {

        $data = Laptopcats::all();

        return view('laptopview',['data'=>$data]);
    }

     public function laptopcatt()
    {

    	$data = Laptopcats::all();

    	return view('admin/laptopcat',['data'=>$data]);
    }

    public function laptopcatdelete($id){

        $data = Laptopcats::FindOrFail($id); 

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
        

    	DB::delete('delete from category where id = ?',[$id]); 
        
 	
    	return redirect()->back()->with('success', 'Delete phone cat');   
    }

     public function store(Request $req) {

        $phonec = new Laptopcats();        
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

      public function laptopviewid($category)
    {
        $data = Laptoppost::where('category', $category)->get();
        //return response()->json($dataphone);
        //$data ="shubham";
        return view('laptopmodel',['data' => $data]);
    }
}
