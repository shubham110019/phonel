<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;

class Faqs extends Controller
{
    
    public function list()
    {
    	$data= Faq::all();
    	return view('faqview',['data'=>$data]);
    }
}
