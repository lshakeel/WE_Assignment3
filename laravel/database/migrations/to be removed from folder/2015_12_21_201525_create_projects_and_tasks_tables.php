<?php
 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateProjectsAndTasksTables extends Migration {
 
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->default('');			$table->string('email')->default('');			$table->string('password')->default('');  $table->string('role')->default('');
		});
 
		Schema::create('code', function(Blueprint $table) {			$table->increments('id');			$table->integer('user_id')->unsigned()->default(0);			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');			$table->string('code')->default('');	});	}
 
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('code');		Schema::drop('users');
	}
 
}