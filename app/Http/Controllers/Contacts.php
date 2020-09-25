<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Partner;
use App\Feedbook;
use DB;

class Contacts extends Controller
{
    public function index(){

		return view('contact');
	}

    public function store(Request $req) {

        $this->validate($req,[
         'name'=>'required',
         'subject'=>'required',
         'phone'=>'required',
         'email'=>'required',
         'message'=>'required'

      ]);
		
        $blogadd2 = new Contact();      

        $blogadd2->name = $req->input('name');
        $blogadd2->subject = $req->input('subject');  
        $blogadd2->phone = $req->input('phone');
        $blogadd2->email = $req->input('email'); 
        $blogadd2->message = $req->input('message'); 

        $blogadd2->save();


		return redirect()->back()->with('message', 'Form is successfully submitted!');

       
    }

    public function contac(){

        $data=Partner::count();
        $data2=Contact::count();
        $data3=Feedbook::count();

        return view('admin/contact',compact('data','data2','data3'));
    }

    public function partnerview(){

        $data=Partner::all();
        return view('admin/allpartner',compact('data'));
    }

    public function partnerdelete($id){
        DB::delete('delete from partner where id = ?',[$id]); 
        
    
        return redirect()->back()->with('success', 'Delete partner'); 
    }

    public function contactview(){

        $data=Contact::all();
        return view('admin/allcontact',compact('data'));
    }

    public function contactdelete($id){
        DB::delete('delete from contact where id = ?',[$id]); 
        
    
        return redirect()->back()->with('success', 'Delete contact'); 
    }

     public function feedbackview(){

        $data=Feedbook::all();
        return view('admin/allfeedback',compact('data'));
    }

    public function feedbackdelete($id){
        DB::delete('delete from feedback where id = ?',[$id]); 
        
    
        return redirect()->back()->with('success', 'Delete contact'); 
    }
}
