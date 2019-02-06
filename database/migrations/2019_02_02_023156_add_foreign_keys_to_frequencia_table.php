<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFrequenciaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('frequencia', function(Blueprint $table)
		{
			$table->foreign('id_agenda', 'frequencia_ibfk_1')->references('id_agenda')->on('agenda')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_individuo', 'frequencia_ibfk_2')->references('id_individuo')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('frequencia', function(Blueprint $table)
		{
			$table->dropForeign('frequencia_ibfk_1');
			$table->dropForeign('frequencia_ibfk_2');
		});
	}

}
