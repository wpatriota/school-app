<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEntradaFinanceiroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('entrada_financeiro', function(Blueprint $table)
		{
			$table->foreign('id_lancamento', 'entrada_financeiro_ibfk_1')->references('id')->on('lancamento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_forma_pagamento', 'entrada_financeiro_ibfk_2')->references('id')->on('forma_pagamento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('entrada_financeiro', function(Blueprint $table)
		{
			$table->dropForeign('entrada_financeiro_ibfk_1');
			$table->dropForeign('entrada_financeiro_ibfk_2');
		});
	}

}
