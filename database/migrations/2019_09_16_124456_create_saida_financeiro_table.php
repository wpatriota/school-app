<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSaidaFinanceiroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('saida_financeiro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_tipo_financeiro')->index('id_tipo_financeiro');
			$table->integer('id_forma_pagamento')->index('id_forma_pagamento');
			$table->float('valor', 10, 0);
			$table->string('mes_referencia', 2);
			$table->string('ano_referencia', 4);
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
		Schema::drop('saida_financeiro');
	}

}