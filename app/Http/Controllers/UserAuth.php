<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use Auth;
use App\User;

class UserAuth extends Controller
{
    //
	public function authenticate(Request $request){
		
	
	    
	
	
		
	}
	public function mailing(){
		$data=["test"=>1];
				$email= Mail::send("email.test",$data,function ($message){
					$message->from("perspectivart.ke@gmail.com",null);
					$message->to("dennismiano64@gmail.com","deno");
					$message->cc("sydneysayeed@gmail.com","sido");
				    });
					if($email){
						echo"success";
					}
					else{echo"fail";}
				
		
						
					}
	public function register(Request $request){
		
	}
	
}
