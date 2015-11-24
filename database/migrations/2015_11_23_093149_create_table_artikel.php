<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArtikel extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artikels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->String('author');
			$table->String('judul');
			$table->String('isi');
			$table->String('gambar');
			$table->String('slug');
			$table->String('sampul');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artikels');
	}

}
