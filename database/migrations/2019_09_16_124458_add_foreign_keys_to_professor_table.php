<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProfessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('professor', function(Blueprint $table)
		{
			$table->foreign('id_individuo', 'professor_ibfk_1')->references('id')->on('individuo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('professor', function(Blueprint $table)
		{
			$table->dropForeign('professor_ibfk_1');
		});
	}

}
