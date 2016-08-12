<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use Auth;

class UserAuth extends Controller
{
    //
	public function authenticate(Request $request){
	$data="";
				$email= Mail::send("email.test",$data,function ($message){
					$message->from("perspectivart.ke@gmail.com","admin");
					$message->to("dennismiano64@gmail.com","deno");
					$message->cc("sydneysayeed@gmail.com","sido");
				    });
	if($email){
		echo"success";
	}
	else(
	echo"fail";
	
	)
		
	}
	
}
