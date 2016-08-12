<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
	protected $fillable = [
         'sysuser_id',"file_name"
    ];
	//link to sysy user
	public function sys(){
		return $this->belongsTo("App\SystemUser","sysuser_id");
	}
	
	   	//link to post
		public function post(){
		return $this->belongsTo("App\Post","file_id");
	     }
}
