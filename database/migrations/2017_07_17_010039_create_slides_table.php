<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->increments('id');        
            $table->string('backgroundimage'); 
            $table->string('iconimage');
            $table->integer('iconimage_position');
            $table->integer('iconimage_col_size');  
            $table->string('text_h1');  
            $table->mediumText('text_h2');  
            $table->string('read_more_link');         
            $table->integer('text_col_size');  
            $table->boolean('textpositionleft')->default(true);  
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
        Schema::dropIfExists('slides');
    }
}
