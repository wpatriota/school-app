<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEstoqueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estoque', function(Blueprint $table)
		{
			$table->foreign('id_tipo_item', 'estoque_ibfk_1')->references('id')->on('tipo_item')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estoque', function(Blueprint $table)
		{
			$table->dropForeign('estoque_ibfk_1');
		});
	}

}
