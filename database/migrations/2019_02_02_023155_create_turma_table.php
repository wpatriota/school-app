<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTurmaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turma', function(Blueprint $table)
		{
			$table->integer('id_turma', true);
			$table->integer('id_curso')->index('id_curso');
			$table->string('nome');
			$table->date('data_inicio')->nullable();
			$table->date('data_termino')->nullable();
			$table->integer('id_professor')->nullable()->index('id_professor');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('turma');
	}

}
