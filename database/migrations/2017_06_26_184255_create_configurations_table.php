<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('site_meta_description');
            $table->string('site_meta_keywords');
            $table->string('social_facebook');
            $table->string('social_twitter');
            $table->string('social_instgram');
            $table->string('social_googleplus');
            $table->string('social_linkein');
            $table->string('social_skype');
            $table->string('social_youtube');
            $table->string('social_pinterest');
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
        Schema::dropIfExists('configurations');
    }
}
