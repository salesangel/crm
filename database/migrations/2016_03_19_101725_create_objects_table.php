<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('objects', function (Blueprint $table) {
			$table->increments('objid');
			$table->integer('org_id')->unsigned();
			$table->string('obj_name');
			$table->timestamps();

			$table->foreign('org_id')
				->references('orgid')
				->on('orgs');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('objects');
	}
}
