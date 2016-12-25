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


class User extends model
{
	public $timestamps = false;
	protected $table = 'phpbb_users';
	
	protected $primaryKey = 'user_id';
	
	public function posts()
	{
		return $this->hasMany('App\Post', 'poster_id', 'user_id');
	}
	
	public function topics()
	{
		return $this->hasMany('App\Topic', 'poster_id', 'user_id');
	}
}