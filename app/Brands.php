<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Blog;
use App\Work;
use DB;
use App\Modell;

class Brands extends Controller
{
    
    public function brand()
    {
    	$data1 = Brand::all();

    	$data2 = Blog::all();

    	$data3 = Work::all();


    return view('index',compact(['data1','data2','data3']));
    }

    
    function index()
    {
     return view('autocomplete');
    }

    function fetch(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = DB::table('posts')
        ->where('title', 'LIKE', "%{$query}%")
       ->limit(4)->get();
      $output = '<ul class="dropdown-menu" style="    display: block;
    position: absolute;
    left: 0;
    width: 100%;
    ">';
      foreach($data as $row)
      {
       $output .= '
       <li style="padding:5px;padding-left:15px;border-bottom: 1px solid #dcd7d7;"><a href="phone/model/singles/'.$row->id.'" style="color:#777777;">'.$row->title.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }
}
