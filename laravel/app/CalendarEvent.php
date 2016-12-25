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
use Illuminate\Database\Eloquent\SoftDeletes;


class CalendarEvent extends model
{
	use SoftDeletes;
	
	public $timestamps = true;
	
	protected $dates =
	[
		'created_at',
		'updated_at',
		'deleted_at'
	];
	
	protected $guarded =
	[
		'id',
	    'created_at',
	    'updated_at'
	];
	
	public function signups()
	{
		return $this->hasMany('App\CalendarSignup');
	}
	
	public function created_by()
	{
		return $this->belongsTo('App\User', 'user_id', 'user_id');
	}
	
	public function modified_by()
	{
		return $this->belongsTo('App\User', 'user_id', 'user_id');
	}
	
	public function deleted_by()
	{
		return $this->belongsTo('App\User', 'user_id', 'user_id');
	}
}