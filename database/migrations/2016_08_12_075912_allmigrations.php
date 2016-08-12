<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Allmigrations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('users',function (Blueprint $table){
			
			$table->increments("id");
	        $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
		});
		Schema::create("system_user",function(Blueprint $table){
			$table->increments("id");
			$table->integer("user_id")->unsigned();
			$table->foreign("user_id")->references("id")->on("users");
			$table->string("usertype");
			$table->timestamps();
			
			
			
		});
		Schema::create("admins",function(Blueprint $table){
			$table->increments("id");
			$table->integer("suser_id");
			$table->foreign("suser_id")->references("id")->on("system_user");
			$table->timestamps();
			
		});
		Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
		Schema::create("files",function(){
			$table->increments("id");
			$table->integer("sysuser_id");
			$table->string("file_name");
			$table->timestamps();
		});
		Schema::create("post",function(Blueprint  $table){
			$table->increments("id");
			$table->integer("suser_id");
			$table->foreign("suser_id")->references("id")->on("system_user");
			$table->text("title");
			$table->text("body");
            $table->integer("file_id");
			$table->foreign("file_id")->references("id")->on("files");
			$table->timestamps();
			
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		 Schema::drop('users');
		 Schema::drop('system_user');
		 Schema::drop('admins');
		 Schema::drop('password_resets');
    }
}
