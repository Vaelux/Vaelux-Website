<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('news_items', function (Blueprint $table)
	    {
		    $table->bigIncrements('id');
		    $table->bigInteger('news_source_id')->references('id')->on('news_sources');
		    $table->string('link', 255)->unique();
		    $table->dateTime('item_date')->nullable();
		    $table->dateTime('scrape_date')->nullable();
		    $table->string('title', 255)->nullable();
		    $table->longText('content')->nullable();
		    $table->boolean('posted')->default(false);
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::drop('news_items');
    }
}
