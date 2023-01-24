<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreEmploisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offre_emplois', function (Blueprint $table) {
            $table->id();
            $table->string('title_offre',255);
            $table->string('meta_description',255)->nullable();
            $table->string('meta_title',100)->nullable();
            $table->string('meta_alt',65)->nullable();
            $table->text('content_fr');
            $table->text('content_en')->nullable();
            $table->string('image_offre');
            $table->date('date_post')->nullable();
            $table->timeTz('heure_post', 0)->nullable();
            $table->foreignId('pole_id');
            $table->foreign('pole_id')->references('id')->on('poles')->onDelete('cascade');
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('offre_emplois');
    }
}
