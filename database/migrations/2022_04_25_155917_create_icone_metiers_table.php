<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIconeMetiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icone_metiers', function (Blueprint $table) {
            $table->id();
            $table->string('nom_icone');
            $table->string('icone_noire');
            $table->string('icone_blanche')->nullable();
            $table->string('icone_blanche_cercle')->nullable();
            $table->string('url');
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
        Schema::dropIfExists('icone_metiers');
    }
}
