<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLicensesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('licenses', function (Blueprint $table) {
			
			$table->increments('id');
			$table->string('license_key')->unique();
			$table->integer('client_id')->unsigned();

			$table->foreign('client_id')
			            ->references('id')
			            ->on('clients')
			            ->onDelete('cascade');

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
		Schema::drop('Licenses');
	}
}
