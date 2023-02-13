<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dania', function (Blueprint $table) {
            $table->id();
            $table->integer('id_przepisu')->unsigned();
            $table->foreign('id_przepisu')->references('id')->on('przepisy')->onDelete('cascade');
            $table->integer('id_wykonawcy')->unsigned();
            $table->foreign('id_wykonawcy')->references('id')->on('wykonawcy')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dania');
    }
};
