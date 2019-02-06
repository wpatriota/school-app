<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndividuoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('individuo', function(Blueprint $table)
		{
			$table->integer('id_individuo', true);
			$table->integer('user_id');
			$table->string('nome');
			$table->string('sobrenome');
			$table->string('rg', 50);
			$table->string('cpf', 50);
			$table->string('email');
			$table->string('telefone', 50);
			$table->string('celular', 50);
			$table->string('endereco');
			$table->string('bairro');
			$table->string('cidade');
			$table->string('estado', 50);
			$table->string('cep', 15);
			$table->date('data_nascimento');
			$table->string('estado_civil');
			$table->string('profissao');
			$table->text('observacao', 65535)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('individuo');
	}

}
