<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAgendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agenda', function(Blueprint $table)
		{
			$table->foreign('id_tipo_evento', 'agenda_ibfk_1')->references('id_tipo_evento')->on('tipo_evento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agenda', function(Blueprint $table)
		{
			$table->dropForeign('agenda_ibfk_1');
		});
	}

}
