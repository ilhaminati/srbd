<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Keldes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('keldes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Kelurahan');
			$table->string('kecamatan');
			$table->string('kabupaten');
			$table->string('provinsi');
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
		Schema::drop('keldes');
	}

}
