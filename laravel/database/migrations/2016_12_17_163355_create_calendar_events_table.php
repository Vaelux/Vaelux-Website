<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('calendar_events', function (Blueprint $table)
	    {
		    $table->bigIncrements('id');
		    $table->timestamp('created_at')->useCurrent();
		    $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
		    $table->softDeletes();
		    $table->unsignedBigInteger('created_by')->references('user_id')->on('phpbb_users');
		    $table->unsignedBigInteger('modified_by')->nullable()->references('user_id')->on('phpbb_users');
		    $table->unsignedBigInteger('deleted_by')->nullable()->references('user_id')->on('phpbb_users');
		    
		    $table->string('title');
		    $table->text('description')->nullable();
		    $table->string('game')->nullable();
		    $table->string('background-image')->nullable();
		    $table->string('icon')->nullable();
		    
		    $table->boolean('all_day')->default(false);
		    $table->dateTime('start');
		    $table->dateTime('end')->nullable();
		    
		    $table->string('text_color')->default('#000000');
		    $table->string('background_color')->default('#FFFFFF');
		    $table->string('border_color')->default('#000000');
		    
		    $table->boolean('allow_signups')->default(true);
		    
		    $table->boolean('discord_notify')->default(true);
		    $table->boolean('discord_notify_by_pm')->default(false);
		    
		    $table->boolean('discord_notify_on_signup')->default(true);
		    $table->boolean('discord_notify_on_change')->default(true);
		    $table->boolean('discord_notify_on_delete')->default(true);
		    $table->boolean('discord_notify_on_start')->default(true);
		    $table->boolean('discord_notify_on_1_hour')->default(true);
		    $table->boolean('discord_notify_on_1_day')->default(false);
		    $table->boolean('discord_notify_on_1_week')->default(false);
	    });
	
	    DB::table('calendar_events')->insert(
	    [
		    [
			    'title'       => 'Test Event 1',
			    'description' => 'This is a test event.',
			    'game'        => 'ARMA3',
			    'start'       => '2016-12-01 02:00:00',
			    'created_by'  => 2,
		    ],
		
		    [
			    'title'       => 'Test Event 3',
			    'description' => 'This is another test event.',
			    'game'        => 'ARMA3',
			    'start'       => '2016-11-04 03:00:00',
			    'created_by'  => 2,
		    ],
	    ]);
	
	    DB::table('calendar_events')->insert(
	    [
		
		    [
			    'title'       => 'Test Event 2',
			    'description' => 'This is another test event.',
			    'game'        => 'ARMA3',
			    'start'       => '2016-12-04 14:00:00',
			    'end'         => '2016-12-04 15:00:00',
			    'created_by'  => 2,
		    ],
		
		    [
			    'title'       => 'Test Event 4',
			    'description' => 'This is another test event.',
			    'game'        => 'ARMA3',
			    'start'       => '2016-12-04 16:00:00',
			    'end'         => '2016-12-04 17:00:00',
			    'created_by'  => 2,
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
	    Schema::drop('calendar_events');
    }
}
