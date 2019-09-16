<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArquivoIndividuoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('arquivo_individuo', function(Blueprint $table)
		{
			$table->foreign('id_individuo', 'arquivo_individuo_ibfk_1')->references('id')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('arquivo_individuo', function(Blueprint $table)
		{
			$table->dropForeign('arquivo_individuo_ibfk_1');
		});
	}

}
