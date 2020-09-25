<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modell;
use App\Phonebook;
use App\Feedbook;
use App\Partner;
use App\Blog;
use App\Pickphone;
use App\Contact;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(Auth::user()->usertype == 'admin')
        {
             $phone = Modell::count();
        $phonebook=Phonebook::count();
        $feedbook=Feedbook::count();
        $partner=Partner::count();
        $blog=Blog::count();
        $pickphone=Pickphone::count();
        $contacts=Contact::count();

        return view('admin/dashboard',compact(['phone','phonebook','feedbook','partner','blog','pickphone','contacts']));
        }
        else{

            $userid= Auth::user()->id;
             $data = Phonebook::where(['usernum'=> $userid, 'status'=>1 ])->get();

             
            return view('home2',compact(['data']));
        }

       


    }


}
