<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membros', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('endereco')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('cep')->nullable();
            $table->string('registro')->nullable();
            $table->string('orgao')->nullable();
            $table->string('cpf')->nullable();
            $table->string('email')->nullable();
            $table->string('profissao')->nullable();
            $table->string('formacao')->nullable();
            $table->string('estadocivil')->nullable();
            $table->string('unidadefederativa')->nullable();
            $table->string('tiposanguineo')->nullable();
            $table->string('telefone')->nullable();
            $table->string('batizado')->nullable();
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
        //
    }
}
