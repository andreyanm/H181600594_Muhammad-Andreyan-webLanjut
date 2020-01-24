<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kategori_artikel', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('artikel', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('kategori_galeri', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('kategori_pengumuman', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('kategori_berita', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('galeri', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('pengumuman', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('berita', function (Blueprint $table) {
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
        Schema::table('kategori_galeri', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('kategori_pengumuman', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('kategori_berita', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('galeri', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('pengumuman', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('berita', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
