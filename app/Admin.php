<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
	protected $fillable = [
         'sysuser_id'
    ];
	//link to sys user
	public function sys(){
		return $this->belongsTo("App\SystemUser","sysuser_id");
	}
}
