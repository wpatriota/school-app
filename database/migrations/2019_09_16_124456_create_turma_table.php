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
			$table->integer('id', true);
			$table->integer('id_curso')->index('id_curso');
			$table->string('nome');
			$table->date('data_inicio')->nullable();
			$table->date('data_termino')->nullable();
			$table->integer('id_professor')->nullable()->index('turma_ibfk_2');
			$table->date('periodo_matricula_de');
			$table->date('periodo_matricula_ate');
			$table->string('dia_aula');
			$table->time('horario_aula', 6);
			$table->integer('frequencia_minima');
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
		Schema::drop('turma');
	}

}
