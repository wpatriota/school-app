<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professor', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_individuo')->index('id_individuo');
			$table->date('data_inicio')->nullable();
			$table->date('data_termino')->nullable();
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
		Schema::drop('professor');
	}

}
