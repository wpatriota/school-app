<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlunoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aluno', function(Blueprint $table)
		{
			$table->foreign('id_individuo', 'aluno_ibfk_1')->references('id_individuo')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_turma', 'aluno_ibfk_2')->references('id_turma')->on('turma')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aluno', function(Blueprint $table)
		{
			$table->dropForeign('aluno_ibfk_1');
			$table->dropForeign('aluno_ibfk_2');
		});
	}

}
