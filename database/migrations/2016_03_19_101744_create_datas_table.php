<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datas', function (Blueprint $table) {
			$table->increments('guid');
			$table->integer('org_id')->unsigned();
			$table->integer('object_id')->unsigned();
			$table->string('name');

			$table->foreign('org_id')
				->references('orgid')
				->on('orgs');

			$table->foreign('object_id')
				->references('objid')
				->on('objects');

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
		Schema::drop('datas');
	}
}
