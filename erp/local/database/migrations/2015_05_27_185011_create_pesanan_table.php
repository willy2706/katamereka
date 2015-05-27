<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pesanan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('customer_name');
			$table->integer('amount')->unsigned();
			$table->string('word');
			$table->string('image');
			$table->date('due_date');
			$table->string('assign_to');
			$table->boolean('paid')->default(false);
			$table->boolean('delivered')->default(false);
			$table->boolean('done')->default(false);
			$table->string('additional_information');
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
		Schema::drop('pesanan');
	}

}
