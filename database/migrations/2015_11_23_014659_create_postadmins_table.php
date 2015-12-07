<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostadminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('postadmins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('judul');
			$table->string('isi');
<<<<<<< HEAD
=======
			$table->date('tanggal');
>>>>>>> 76e22f397eb8e0a58863e5d7e00d325402b45482
			$table->string('foto');
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
		Schema::drop('postadmins');
	}

}
