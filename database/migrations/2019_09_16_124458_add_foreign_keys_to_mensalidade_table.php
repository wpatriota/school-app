<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMensalidadeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('mensalidade', function(Blueprint $table)
		{
			$table->foreign('id_aluno', 'mensalidade_ibfk_1')->references('id')->on('aluno')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_membro', 'mensalidade_ibfk_2')->references('id')->on('membro')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_entrada_financeiro', 'mensalidade_ibfk_3')->references('id')->on('entrada_financeiro')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('mensalidade_aluno', function(Blueprint $table)
		{
			$table->dropForeign('mensalidade_aluno_ibfk_1');
			$table->dropForeign('mensalidade_aluno_ibfk_2');
			$table->dropForeign('mensalidade_aluno_ibfk_3');
		});
	}

}
