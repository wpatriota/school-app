<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEntradaEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('entrada_estoque', function(Blueprint $table)
		{
			$table->foreign('id_individuo', 'entrada_estoque_ibfk_1')->references('id_individuo')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('entrada_estoque', function(Blueprint $table)
		{
			$table->dropForeign('entrada_estoque_ibfk_1');
		});
	}

}
