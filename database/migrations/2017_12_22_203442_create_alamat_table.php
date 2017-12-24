<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlamatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('alamat', function (Blueprint $table) {
		$table->increments('id');
		$table->integer('users_id');
		$table->string('alamat_rumah');
		$table->string('alamat_kantor');
		$table->string('alamat_lahir');
		});
    }
		
    public function down()
    {
        //
    }
}
