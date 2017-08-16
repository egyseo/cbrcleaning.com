<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewslettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsletters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_from'); 
            $table->string('sender_address'); 
            $table->string('replytoname'); 
            $table->string('replytoadress'); 
            $table->string('bccadress'); 
            $table->string('meta_description'); 
            $table->string('meta_keywords'); 
            $table->string('subject'); 
            $table->string('description'); 
            $table->longtext('html_content');  
            $table->longtext('plain_content');         
            $table->boolean('visible')->default(true);          
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
         Schema::dropIfExists('newsletters');
    }
}
