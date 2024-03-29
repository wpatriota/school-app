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
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->string('nome');
			$table->string('sobrenome');
			$table->string('rg', 50);
			$table->string('cpf', 50);
			$table->string('email');
			$table->string('telefone', 50);
			$table->string('celular', 50)->nullable();
			$table->string('endereco');
			$table->string('bairro');
			$table->string('naturalidade')->nullable();
			$table->string('nacionalidade')->nullable();
			$table->string('grau_intrucao')->nullable();
			$table->string('contato_emergencia')->nullable();
			$table->string('doenca')->nullable();
			$table->string('remedio')->nullable();
			$table->string('alergia')->nullable();
			$table->string('cidade');
			$table->integer('id_estado')->default(0)->index('id_estado');
			$table->string('cep', 15);
			$table->date('data_nascimento');
			$table->string('estado_civil')->nullable();
			$table->string('profissao')->nullable();
			$table->integer('dia_mensalidade')->nullable();
			$table->text('observacao', 65535)->nullable();
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
		Schema::drop('individuo');
	}

}
