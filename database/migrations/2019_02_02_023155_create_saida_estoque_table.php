<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaidaEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saida_estoque', function(Blueprint $table)
		{
			$table->integer('id_saida_estoque', true);
			$table->float('quantidade', 10, 0);
			$table->integer('id_individuo');
			$table->integer('id_tipo_item');
			$table->dateTime('data_saida');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('saida_estoque');
	}

}
