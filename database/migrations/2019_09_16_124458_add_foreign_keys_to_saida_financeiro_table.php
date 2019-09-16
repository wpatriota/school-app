<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSaidaFinanceiroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('saida_financeiro', function(Blueprint $table)
		{
			$table->foreign('id_tipo_financeiro', 'saida_financeiro_ibfk_1')->references('id')->on('tipo_saida_financeiro')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_forma_pagamento', 'saida_financeiro_ibfk_2')->references('id')->on('tipo_forma_pagamento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('saida_financeiro', function(Blueprint $table)
		{
			$table->dropForeign('saida_financeiro_ibfk_1');
			$table->dropForeign('saida_financeiro_ibfk_2');
		});
	}

}
