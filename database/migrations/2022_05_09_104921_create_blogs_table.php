<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title_article');
            $table->text('article_fr');
            $table->text('article_en')->nullable();
            $table->string('image_article');
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('category_articles')->onDelete('cascade');
            $table->foreignId('pole_id');
            $table->foreign('pole_id')->references('id')->on('poles')->onDelete('cascade');
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
