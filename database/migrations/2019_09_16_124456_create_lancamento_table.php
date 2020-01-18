<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLancamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lancamento', function(Blueprint $table)
		{
			$table->integer('id', true);			
			$table->string('descricao');
			$table->integer('id_tipo_lancamento')->index('id_tipo_lancamento');
			$table->integer('id_aluno')->index('id_aluno')->nullable();
			$table->integer('id_membro')->index('id_membro')->nullable();			
			$table->dateTime('data_lancamento');
			$table->dateTime('data_vencimento');
			$table->string('status');
			$table->float('valor', 10, 0);

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
		Schema::drop('lancamento');
	}

}
