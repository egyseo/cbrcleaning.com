<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('position'); 
            $table->string('linkedin');
            $table->string('github');  
            $table->string('urlshort'); 
            $table->longtext('content_intro'); 
            $table->longtext('content_full'); 
            $table->longtext('project_intro'); 
            $table->string('photo');   
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
         Schema::dropIfExists('teams');
    }
}
