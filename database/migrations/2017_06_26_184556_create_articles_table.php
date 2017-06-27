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
            $table->foreign('category_id')->references('id')->on('blog_category');
            $table->string('title');
            $table->longtext('htmlcontent');
            $table->string('image_intro');
            $table->string('image_content');
            $table->string('image_intro_alt');
            $table->string('image_content_alt');
            $table->string('tags');
            $table->string('created_by');
            $table->boolean('featured')->default(true);
            $table->boolean('show_social_share')->default(true);
            $table->boolean('show_print_icon')->default(true);
            $table->boolean('show_publish_date')->default(true);
            $table->boolean('show_created_date')->default(true);
            $table->boolean('show_author')->default(true);
            $table->boolean('show_tags')->default(true);
            $table->string('robots');
            $table->integer('access')->unsigned();
            $table->timestamps('publish_date');
            $table->timestamps('star_publish_date');
            $table->timestamps('finish_publish_date');
            $table->timestamps('created_date');
            $table->integer('hits')->unsigned();
            $table->string('metadesc');
            $table->string('metakeywords');
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
