<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agenda', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_tipo_evento')->index('id_evento');
			$table->integer('id_turma')->nullable()->index('id_turma');
			$table->string('nome_evento');
			$table->date('data');
			$table->time('horario', 6);
			$table->string('evento_publico', 1);
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
		Schema::drop('agenda');
	}

}
