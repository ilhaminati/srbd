<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRbsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rbs', function(Blueprint $table)
		{
			$table->increments('no_urut');
			$table->date('tanggal');
			$table->string('desa_kel');
			$table->string('kec');
			$table->string('kab_kot');
			$table->string('provinsi');
			$table->integer('no_lembar_peta');
			$table->string('nama_lembar_peta');
			$table->string('jenis_unsur');
			$table->integer('kode_unsur');
			$table->string('nama_gen');
			$table->string('sub_nama_gen');
			$table->string('asal_bahasa');
			$table->string('arti_nama');
			$table->text('sejarah_nama');
			$table->string('narasumber1');
			$table->string('narasumber2');
			$table->integer('bt1');
			$table->integer('ls1');
			$table->integer('bt2');
			$table->integer('ls2');
			$table->integer('panjang');
			$table->integer('luas');
			$table->integer('tinggi');
			$table->string('petugas1');
			$table->string('petugas2');
			$table->date('tanggal2');
			$table->string('jabatan');
			$table->string('kecamatan');
			$table->string('nama_pejabat');
			$table->integer('nip');
            $table->softDeletes();
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
		Schema::drop('rbs');
	}

}
