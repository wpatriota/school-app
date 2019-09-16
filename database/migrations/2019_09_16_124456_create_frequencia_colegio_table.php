<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrequenciaColegioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frequencia_colegio', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_aluno')->index('id_aluno');
			$table->integer('id_agenda')->index('id_agenda');
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
		Schema::drop('frequencia_colegio');
	}

}
