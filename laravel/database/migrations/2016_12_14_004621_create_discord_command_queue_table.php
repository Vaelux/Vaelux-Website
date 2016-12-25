<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscordCommandQueueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('discord_command_queue', function (Blueprint $table)
	    {
		    $table->bigIncrements('id');
		    $table->integer('created_at');
		    $table->integer('command_type');
		    $table->text('message')->nullable();
		    $table->string('target_user')->nullable();
		    $table->string('target_channel')->nullable();
		    $table->boolean('processed')->default(false);
	    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::drop('discord_command_queue');
    }
}
