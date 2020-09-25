<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File as LaraFile;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class Blogs extends Controller
{   
 	public function blog()
    {
    	//$data = Blog::get()->simplePaginate(5);
    	$data = Blog::orderBy('id','desc')->simplePaginate(6);
    
    	return view('blogview',compact('data'));
    }

    public function blog2()
    {
    	
    	$data = Blog::all();
    
    	return view('admin/blogview',compact('data'));
    }

       public function viewblog($id)
    {
        $data = Blog::where('id', $id)->get();        
        return view('blogmain',['data' => $data]);
    }

    public function blogdelete($id){

        $data = Blog::FindOrFail($id); 

        if(file_exists('public/img/blog/'.$data->image) AND !empty($data->image)){ 
            unlink('public/img/blog/'.$data->image);
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
        

    	DB::delete('delete from blog where id = ?',[$id]); 
        
 	
    	return redirect()->back()->with('success', 'Delete Blog');   
    }

    public function blogadd(){

    	return view('admin/addblog');
    }

     public function store(Request $req) {

        $this->validate(request(), [
        'title' => 'required',
        'text' => 'required',
        'image' => 'required|image|mimes:jpg,jpeg,png,gif'
         ]);
        
        $blogadd2 = new Blog();        
        $blogadd2->title = $req->input('title');
        $blogadd2->text = $req->input('text');        

         if ($req->hasFile('image')) {
            $image = $req->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/blog/');
            $image->move($destinationPath, $name);
             $blogadd2->image = $name;
          }

        $blogadd2->save();

        return view('admin/addblog')->with('success', 'BLog Insert');
    }

    public function editid($id)
    {
        $data = Blog::where('id', $id)->get();
        //return response()->json($dataphone);
        //$data ="shubham";
        return view('admin/blogedit',['data' => $data]);
    }


    public function edit(Request $request,$id) {

        $blogedit = Blog::find($id);        
        $blogedit->title = $request->input('title');
        $blogedit->text = $request->input('text');   

        $data2=$request->input('oldimg');  

      

         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('img/blog/');
            $image->move($destinationPath, $name);
             $blogedit->image = $name;

            

          if(file_exists('public/img/blog/'.$data2) AND !empty($data2)){ 
            unlink('public/img/blog/'.$data2);
             } 
         
        }
          


        $blogedit->save();
    
        return redirect()->back()->with('success', 'Delete Blog'); 
            
    }

    
}
