<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); 
            $table->string('alias'); 
            $table->boolean('feature')->default(true); 
            $table->string('image_full'); 
            $table->string('image_intro');
            $table->string('image_alt');  
            $table->longtext('content_full');            
            $table->string('content_intro');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('tags_array');
            $table->integer('hits');
            $table->boolean('show_hits')->default(true);
            $table->integer('media_id')->references('id')->on('media');  
            $table->integer('category_id')->references('id')->on('categories');
            $table->boolean('published')->default(true); 
            $table->boolean('show_author')->default(true); 
            $table->datetime('star_publish_date');
            $table->datetime('finish_publish_date');
            $table->boolean('state')->default(true); 
            $table->integer('userid')->reference('id')->on('users');   
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
         Schema::dropIfExists('articles');
    }
}
