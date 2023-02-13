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
        Schema::create('wydarzenia', function (Blueprint $table) {
            $table->id();
            $table->string('nazwa');
            $table->date('data');
            $table->integer('ilosc_gosci')->unsigned();
            $table->integer('id_menu')->unsigned();
            $table->foreign('id_menu')->references('id')->on('menu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wydarzenia');
    }
};
