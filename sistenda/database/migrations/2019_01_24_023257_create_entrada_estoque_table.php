<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntradaEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrada_estoque', function(Blueprint $table)
		{
			$table->integer('id_entrada_estoque', true);
			$table->string('nome_responsavel')->nullable();
			$table->integer('id_individuo')->nullable()->index('id_individuo');
			$table->float('quantidade', 10, 0);
			$table->integer('id_tipo_item')->index('id_tipo_item');
			$table->integer('id_unidade_medida')->index('id_unidade_medida');
			$table->date('data_entrada');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entrada_estoque');
	}

}
