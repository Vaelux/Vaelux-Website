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


class Forum extends model
{
	public $timestamps = false;
	protected $table = 'phpbb_forums';
	
	protected $primaryKey = 'forum_id';
	
	protected $dates =
	[
		'forum_last_post_time',
	];
	
	public function topics()
	{
		return $this->hasMany('App\Topic', 'forum_id', 'forum_id');
	}
	
	public function parent()
	{
		return $this->belongsTo('App\Forum', 'parent_id', 'forum_id');
	}
	
	public function forums()
	{
		return $this->hasMany('App\Forum', 'parent_id', 'forum_id');
	}
}