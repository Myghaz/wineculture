<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmizadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amizades', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_envio')->unsigned();
            $table->biginteger('id_destino')->unsigned();
            $table->enum('estado', ['Pendente', 'Aceite'])->default('Pendente');
            $table->timestamps();
            $table->foreign('id_envio')
            ->references('id')->on('users');
            $table->foreign('id_destino')
            ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amizades');
    }
}
