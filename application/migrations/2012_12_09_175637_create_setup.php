<?php


class Create_Setup {

	/**
	 * Make changes to the database.
	 * @author Naing Lin Aung (http://www.m0rris.com)
	 * @return void
	 */
	
	  
	public function up()
	{
		
		
		
		Schema::create('shortenurl', function($table) {
		
		// auto incremental id (PK)
		
		$table->increments('id');
		$table->text('givenurl');
		$table->string('shortenedurl', 10);
		
		 
	 	});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shortenurl');
	}

}