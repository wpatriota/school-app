<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGrupoLimpezaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo_limpeza', function(Blueprint $table)
		{
			$table->foreign('id_individuo', 'grupo_limpeza_ibfk_1')->references('id')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupo_limpeza', function(Blueprint $table)
		{
			$table->dropForeign('grupo_limpeza_ibfk_1');
		});
	}

}
