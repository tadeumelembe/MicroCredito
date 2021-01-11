<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('phoneNumber');
            $table->string('doctype');
            $table->string('docNumber');
            $table->string('nuit');
            $table->date('birthdate');
            $table->string('gender');
            $table->string('bairro');
            $table->string('rua');
            $table->string('casa');
            $table->string('email');
            $table->string('nationality');
            $table->string('estado');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
