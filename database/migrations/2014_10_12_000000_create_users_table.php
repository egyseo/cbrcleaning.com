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
            $table->integer('user_group_id')->unsigned();
            $table->string('login', 20 )->unique();
            $table->string('password',500);
            $table->string('email', 30)->unique();
            $table->dateTime('registration_date');
            $table->timestamps();         
            $table->string('registration_ip');
            $table->boolean('recieve_email')->default(true);
            $table->boolean('blocked_user')->default(false);
            $table->boolean('require_password_reset')->default(false);
            $table->rememberToken();  
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
