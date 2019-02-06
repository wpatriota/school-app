<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMembroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('membro', function(Blueprint $table)
		{
			$table->foreign('id_individuo', 'membro_ibfk_1')->references('id_individuo')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('membro', function(Blueprint $table)
		{
			$table->dropForeign('membro_ibfk_1');
		});
	}

}
