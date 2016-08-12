<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $fillable = [
         'sysuser_id',"title","body","file_id"
    ];
	//link to sysy user
	public function sys(){
		return $this->belongsTo("App\SystemUser","sysuser_id");
	}
	//link to file
	public function files(){
		return $this->hasOne("App\File","file_id");
	}
	
}
