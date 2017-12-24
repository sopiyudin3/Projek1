<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('data_keluarga', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('users_id');
		$table->string('nama_ibu');
		$table->string('nama_ayah');
		$table->string('nama_anak');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
