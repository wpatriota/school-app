<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrequenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frequencia', function(Blueprint $table)
		{
			$table->integer('id_frequencia', true);
			$table->integer('id_individuo')->index('id_individuo');
			$table->integer('id_agenda')->index('id_agenda');
			$table->dateTime('horario_marcacao')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('frequencia');
	}

}
