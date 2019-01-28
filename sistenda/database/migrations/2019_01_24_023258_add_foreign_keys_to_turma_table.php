<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTurmaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('turma', function(Blueprint $table)
		{
			$table->foreign('id_curso', 'turma_ibfk_1')->references('id_curso')->on('curso')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_professor', 'turma_ibfk_2')->references('id_individuo')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('turma', function(Blueprint $table)
		{
			$table->dropForeign('turma_ibfk_1');
			$table->dropForeign('turma_ibfk_2');
		});
	}

}
