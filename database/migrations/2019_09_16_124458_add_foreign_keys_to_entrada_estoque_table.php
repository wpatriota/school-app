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
			$table->foreign('id_responsavel', 'entrada_estoque_ibfk_1')->references('id')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_tipo_item', 'entrada_estoque_ibfk_2')->references('id')->on('tipo_item')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_unidade_medida', 'entrada_estoque_ibfk_3')->references('id')->on('unidade_medida')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('entrada_estoque_ibfk_2');
			$table->dropForeign('entrada_estoque_ibfk_3');
		});
	}

}
