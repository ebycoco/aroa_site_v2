<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageAccueilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_accueils', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();
            $table->string('nom_entreprise')->nullable();
            $table->string('slogant')->nullable();
            $table->string('message')->nullable();
            $table->string('path')->nullable();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::dropIfExists('page_accueils');
    }
}
