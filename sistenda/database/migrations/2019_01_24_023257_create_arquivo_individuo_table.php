<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArquivoIndividuoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('arquivo_individuo', function(Blueprint $table)
		{
			$table->integer('id_arquivo_individuo', true);
			$table->integer('id_individuo')->index('id_individuo');
			$table->string('arquivo');
			$table->dateTime('data_inclusao');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('arquivo_individuo');
	}

}
