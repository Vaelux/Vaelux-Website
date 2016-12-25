<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/12/2016
 * Time: 8:20 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class DiscordCommand extends model
{
	public $timestamps = false;
	protected $table = 'discord_command_queue';
	
	public function commandType()
	{
		return $this->belongsTo('App\DiscordCommandType', 'command_type', 'id');
	}
}