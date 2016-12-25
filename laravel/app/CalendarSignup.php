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


class CalendarSignup extends model
{
	protected $dates = [
		'created_at',
		'updated_at',
	];
	
	public function event()
	{
		return $this->belongsTo('App\CalendarEvent');
	}
	
	public function user()
	{
		return $this->belongsTo('App\User', 'user_id', 'user_id');
	}
	
	public function confirmationType()
	{
		return $this->belongsTo('App\CalendarConfirmationType');
	}
}