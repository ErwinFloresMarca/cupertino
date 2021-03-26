<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('cooperativa_id');
            $table->foreign('cooperativa_id')->references('id')->on('cooperativas');
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
        Schema::dropIfExists('mina');
    }
}
