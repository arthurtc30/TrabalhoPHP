<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('enunciado');
            $table->string('resposta_a');
            $table->string('resposta_b');
            $table->string('resposta_c');
            $table->string('resposta_d');
            $table->string('resposta_e');
            $table->string('correta');
            $table->unsignedBigInteger('teste_id');
            $table->foreign('teste_id')->references('id')->on('testes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questoes');
    }
}
