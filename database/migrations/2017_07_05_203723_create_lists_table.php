<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('welcome_message'); 
            $table->string('unsuscribe_message');  
            $table->string('description');         
            $table->boolean('visible')->default(true);   
            $table->integer('category_id')->references('id')->on('categories');             
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
         Schema::dropIfExists('lists');
    }
}
