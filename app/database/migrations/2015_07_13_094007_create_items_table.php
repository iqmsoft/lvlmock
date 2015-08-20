<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('portal')->create('items', function ($t) {
           
            $t->increments('id');          
            $t->string('itemname', 250);         
            $t->text('description');            
            $t->decimal('price', 10, 2);          
            $t->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::connection('portal')->drop('items');
	}

}
