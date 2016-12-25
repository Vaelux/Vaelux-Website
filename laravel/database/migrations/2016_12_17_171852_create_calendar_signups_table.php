<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('calendar_signups', function (Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->timestamps();
			
			$table->unsignedBigInteger('event_id')->references('id')->on('calendar_events');
			$table->unsignedBigInteger('user_id')->references('user_id')->on('phpbb_users');
			$table->unsignedSmallInteger('confirmation_type')->references('id')->on('calendar_confirmation_types');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calendar_signups');
	}
}
