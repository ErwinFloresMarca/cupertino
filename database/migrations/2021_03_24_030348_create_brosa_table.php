<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrosaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brosas', function (Blueprint $table) {
            $table->id();
            $table->string('lote',6)->unique();
            $table->double('peso_bruto', 8, 3);
            $table->double('peso_tara', 8, 3);
            $table->double('peso_neto', 8, 3);
            $table->double('ley', 8, 2)->nullable();
            $table->date('fecha_ingreso');
            $table->date('fecha_liquidacion')->nullable();
            $table->foreignId('estado_id');
            $table->double('valor',16,2)->nullable();
            $table->foreignId('cooperativa_id');
            $table->foreignId('mina_id');
            $table->double('bono',16,2);
            $table->foreign('estado_id')->references('id')->on('brosa_estados');
            $table->foreign('cooperativa_id')->references('id')->on('cooperativas');
            $table->foreign('mina_id')->references('id')->on('minas');
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
        Schema::dropIfExists('brosa');
    }
}
