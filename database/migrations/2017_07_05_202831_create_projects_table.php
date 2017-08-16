<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('icon'); 
            $table->string('image_intro'); 
            $table->string('image_full'); 
            $table->longtext('content_full');            
            $table->longtext('content_intro');
            $table->string('project_type');
            $table->string('linkProduction');
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
         Schema::dropIfExists('projects');
    }
}
