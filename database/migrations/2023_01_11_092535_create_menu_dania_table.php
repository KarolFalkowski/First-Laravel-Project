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
        Schema::create('menu_dania', function (Blueprint $table) {
            $table->id();
            $table->integer('id_dania')->unsigned();
            $table->foreign('id_dania')->references('id')->on('dania');
            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_dania');
    }
};
