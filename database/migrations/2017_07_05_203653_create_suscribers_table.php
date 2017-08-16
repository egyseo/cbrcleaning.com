<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suscribers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email'); 
            $table->string('firstname'); 
            $table->string('lastname'); 
            $table->boolean('html')->default(true);                 
            $table->integer('userid')->reference('id')->on('users');   
            $table->boolean('state')->default(true);
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
         Schema::dropIfExists('suscribers');
    }
}
