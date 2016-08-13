<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Admin extends Controller
{
    //
	public function showlog(){
		//echo"hit";
		
		return view("admin.adminhome");
	}
}
