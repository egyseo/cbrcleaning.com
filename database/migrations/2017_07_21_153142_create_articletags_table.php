<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticletagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articletags', function (Blueprint $table) {          
            $table->increments('id');        
            $table->integer('articleid')->references('id')->on('articles');
            $table->integer('tagid')->references('id')->on('tags');
            $table->index(['articleid', 'tagid']);
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
        Schema::dropIfExists('articletags');
    }
}
