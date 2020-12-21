<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestacoes', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->double('valor');
            $table->unsignedBigInteger('emprestimo_id');
            $table->timestamps();
            $table->softDeletes();
           $table->foreign('emprestimo_id')->references('id')->on('emprestimos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestacoes');
    }
}
