<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarConfirmationTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('calendar_confirmation_types', function (Blueprint $table)
		{
			$table->smallIncrements('id');
			$table->string('name')->unique();
		});
		
		DB::table('calendar_confirmation_types')->insert(
			[
				[
					'name' => 'yes',
				],
				
				[
					'name' => 'no',
				],
				
				[
					'name' => 'maybe',
				],
			]
		);
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calendar_confirmation_types');
	}
}
