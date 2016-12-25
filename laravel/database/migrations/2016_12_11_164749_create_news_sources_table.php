<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	public function up()
	{
		Schema::create('news_sources', function (Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('game', 255);
			$table->string('link', 255)->unique();
			$table->dateTime('last_scape_date')->nullable();
			$table->integer('interval')->default(3600);
			$table->string('item_markup_wrapper', 255)->default('item');
			$table->boolean('follow_items')->default(false);
			$table->integer('local_forum_id')->nullable();
			$table->boolean('post_to_forum')->default(true);
			$table->boolean('post_to_discord')->default(true);
		});
		
		DB::table('news_sources')->insert(
		[
			[
				'game' => 'ARMA3',
				'link' => 'https://dev.arma3.com/',
				'interval' => 3000,
				'item_markup_wrapper' => 'article',
				'follow_items' => true,
			    'local_forum_id' => 15,
			],
		]);
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('news_sources');
	}
}
