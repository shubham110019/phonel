<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phonebook;

class PhonebookViews extends Controller
{
    public function phonevId($id)
	{		
		$data = Phonebook::where('id', $id)->get();			
		return view('admin/phonebookview',['data' => $data]);
	}
}
