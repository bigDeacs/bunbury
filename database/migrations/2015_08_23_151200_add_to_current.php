<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddToCurrent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('brochures', function($table)
		{
			$table->string('icon');
		});	
		Schema::table('colours', function($table)
		{
			$table->longText('description');
			$table->string('code');
			$table->string('file');
			$table->integer('label_id');
		});	
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('brochures', function(Blueprint $table)
		{
			$table->dropColumn('icon');
		});
		Schema::table('colours', function($table)
		{
			$table->dropColumn('description');
			$table->dropColumn('code');
			$table->dropColumn('file');
			$table->dropColumn('label_id');
		});	
	}

}
