<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscordChannelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('discord_channels', function (Blueprint $table)
		{
			$table->string('id')->unique();
			$table->string('name')->unique();
			
			$table->primary('id');
		});
		
		DB::table('discord_channels')->insert(
			[
				[
					'id'   => '253541321896099840',
					'name' => 'general',
				],
				
				[
					'id'   => '253541433523306496',
					'name' => 'news',
				],
				
				[
					'id'   => '258792588876840970',
					'name' => 'game_news',
				],
				
				[
					'id'   => '253541398631022592',
					'name' => 'public',
				],
				
				[
					'id'   => '253541490196742145',
					'name' => 'officers',
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
		Schema::drop('discord_channels');
	}
}
