<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaidaEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('saida_estoque', function(Blueprint $table)
		{
			$table->foreign('id_individuo', 'saida_estoque_ibfk_1')->references('id')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_tipo_item', 'saida_estoque_ibfk_2')->references('id')->on('tipo_item')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('saida_estoque', function(Blueprint $table)
		{
			$table->dropForeign('saida_estoque_ibfk_1');
			$table->dropForeign('saida_estoque_ibfk_2');
		});
	}

}
