<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMembroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('membro', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_individuo')->index('id_individuo');
			$table->date('data_inicio');
			$table->date('data_saida')->nullable();
			$table->string('status', 1)->default('s');
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
		Schema::drop('membro');
	}

}
