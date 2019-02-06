<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoLimpezaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_limpeza', function(Blueprint $table)
		{
			$table->integer('id_grupo_limpeza', true);
			$table->integer('id_individuo')->index('id_individuo');
			$table->date('data_inicio');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_limpeza');
	}

}
