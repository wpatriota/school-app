<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFrequenciaColegioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('frequencia_colegio', function(Blueprint $table)
		{
			$table->foreign('id_agenda', 'frequencia_colegio_ibfk_1')->references('id')->on('agenda')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_aluno', 'frequencia_colegio_ibfk_2')->references('id')->on('aluno')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('frequencia_colegio', function(Blueprint $table)
		{
			$table->dropForeign('frequencia_colegio_ibfk_1');
			$table->dropForeign('frequencia_colegio_ibfk_2');
		});
	}

}
