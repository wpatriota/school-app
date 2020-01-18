<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLancamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('lancamento', function(Blueprint $table)
		{
			$table->foreign('id_aluno', 'lancamento_ibfk_1')->references('id')->on('aluno')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_membro', 'lancamento_ibfk_2')->references('id')->on('membro')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_tipo_lancamento', 'lancamento_ibfk_3')->references('id')->on('tipo_lancamento')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('lancamento', function(Blueprint $table)
		{
			$table->dropForeign('lancamento_ibfk_1');
			$table->dropForeign('lancamento_ibfk_2');
			$table->dropForeign('lancamento_ibfk_3');
		});
	}

}
