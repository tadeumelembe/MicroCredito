<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmprestimosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->date('data_emprestimo');
            $table->double('valorConcedido');
            $table->double('taxaJuro');
            $table->double('valorDivida');
            $table->double('valorRemanescente');
            $table->date('data_limite');
            $table->string('estado');
            $table->unsignedBigInteger('custumer_id');
            $table->timestamps();
            $table->softDeletes();
           $table->foreign('custumer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emprestimos');
    }
}
