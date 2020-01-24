<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGaleriTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('galeri', function(Blueprint $table)
		{
			$table->foreign('kategori_galeri_id', 'fk_galeri_kategori_galeri')->references('id')->on('kategori_galeri')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_galeri_users000')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('galeri', function(Blueprint $table)
		{
			$table->dropForeign('fk_galeri_kategori_galeri');
			$table->dropForeign('fk_kategori_users000');
		});
	}

}
