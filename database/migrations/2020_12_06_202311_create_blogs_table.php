<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('data');
            $table->string('autor');
            $table->string('categoria');
            $table->string('preview');
            $table->longText('p1');
            $table->longText('p2');
            $table->longText('p3');
            $table->longText('p4');
            $table->longText('p5');
            $table->longText('p6');
            $table->longText('p7');
            $table->longText('p8');
            $table->longText('p9');
            $table->longText('p10');
            $table->longText('p11');
            $table->string('img');
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
        Schema::dropIfExists('blogs');
    }
}
