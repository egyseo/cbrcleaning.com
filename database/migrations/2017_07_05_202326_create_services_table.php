<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('icon'); 
            $table->string('url_full_content'); 
            $table->string('image_intro'); 
            $table->string('image_full'); 
            $table->longtext('content_full');            
            $table->longtext('content_intro'); 
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
         Schema::dropIfExists('services');
    }
}
