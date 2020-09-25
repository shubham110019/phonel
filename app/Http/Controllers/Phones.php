<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\File as LaraFile;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Phone;



class Phones extends Controller
{
      public function phone()
    {
    	$data= Phone::all();
    	return view('phones',['data'=>$data]);
    }

    public function phonecatt()
    {

    	$data = Phone::all();

    	return view('admin/phonecat',['data'=>$data]);
    }

    public function phonecatdelete($id){

        $data = Phone::FindOrFail($id); 

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

        $phonec = new Phone();        
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

}
