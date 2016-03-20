<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fields', function (Blueprint $table) {
			$table->increments('fieldid');
			$table->integer('org_id')->unsigned();
			$table->integer('object_id')->unsigned();
			$table->string('fieldname');
			$table->string('datatype');
			$table->string('isindexed');
			$table->integer('fieldnum');

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
		Schema::drop('fields');
	}
}
