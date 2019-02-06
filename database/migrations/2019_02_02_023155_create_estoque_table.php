<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estoque', function(Blueprint $table)
		{
			$table->integer('id_estoque');
			$table->integer('id_tipo_item');
			$table->integer('quantidade');
			$table->integer('quantidade_minima');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estoque');
	}

}
