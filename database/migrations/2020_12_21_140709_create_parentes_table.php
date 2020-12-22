<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parentes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('docType');
            $table->string('docNumber');
            $table->string('nuit');
            $table->string('phoneNumber');
            $table->string('grauParentesco');
            $table->date('dataNascimento');
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
        Schema::dropIfExists('parentes');
    }
}
