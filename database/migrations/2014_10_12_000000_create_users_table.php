<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');            
            $table->string('last_name'); 
            $table->string('phone')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('zipcode');
            $table->datetime('birthday');   
            $table->integer('user_group_id')->references('id')->on('usergroups');
            $table->string('password',500);
            $table->string('email', 30)->unique();           
            $table->string('registration_ip');
            $table->string('picture_profile');
            $table->string('question1');
            $table->string('answer1');
            $table->string('question2');
            $table->string('answer2');
            $table->string('question3');
            $table->string('answer3');
            $table->datetime('last_visited');
            $table->datetime('registration_date');  
            $table->boolean('recieve_email')->default(true);
            $table->boolean('blocked_user')->default(false);
            $table->boolean('require_password_reset')->default(false);
            $table->rememberToken();  
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
        Schema::dropIfExists('users');
    }
}
