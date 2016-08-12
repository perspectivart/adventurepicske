<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemUser extends Model
{
    //
	protected $fillable = [
         'user_id', 'usertype',
    ];
	//link to user
	public function user(){
		return $this->belongsTo("App\User");
	}
	//link to admin
	public function admin(){
		return $this->hasOne("App\Admin","sysuser_id");
	}
	//link to files
	public function files(){
		return $this->hasMany("App\File","sysuser_id");
	}
	public function post(){
		return $this->hasMany("App\Post","sysuser_id");
	}
}
