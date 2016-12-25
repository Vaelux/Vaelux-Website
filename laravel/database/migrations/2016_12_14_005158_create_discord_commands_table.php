<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscordCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('discord_commands', function (Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('command');
		});
		
		DB::table('discord_commands')->insert(
			[
				[
					'command' => 'message_channel',
				],
				
				[
					'command' => 'message_user',
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
		Schema::drop('discord_commands');
	}
}
