<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntradaFinanceiroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entrada_financeiro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_lancamento')->index('id_lancamento');
			$table->integer('id_forma_pagamento')->index('id_forma_pagamento');
			$table->float('valor', 10, 0);
			$table->date('data');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entrada_financeiro');
	}

}
