<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFrequenciaTendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('frequencia_tenda', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_membro')->index('id_membro');
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
		Schema::drop('frequencia_tenda');
	}

}
