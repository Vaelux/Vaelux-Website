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


class Topic extends model
{
	public $timestamps = false;
	
	protected $table = 'phpbb_topics';

	protected $primaryKey = 'topic_id';
	
	protected $dates =
	[
		'topic_time',
		'topic_last_post_time',
		'topic_last_view_time',
		'topic_delete_time',
	];
	
	public function posts()
	{
		return $this->hasMany('App\Post', 'topic_id', 'topic_id');
	}
	
	public function forum()
	{
		return $this->belongsTo('App\Forum', 'forum_id', 'forum_id');
	}
	
	public function CreateTopic(Forum $forum, User $user, string $title, string $text)
	{
		// Update topic.
		$this->forum_id         = $forum->forum_id;
		$this->topic_title      = $title;
		$this->topic_poster     = $user->user_id;
		$this->topic_time       = time();
		$this->topic_visibility = 1;
		
		if ($this->save())
		{
			$post = new Post();
			
			// Insert new post.
			if ($post->CreatePost($this, $user, $text)->id != null)
			{
				// Update topic with post data.
				$this->topic_first_post_id = $user->user_id;
				$this->topic_first_poster_name = $user->username;
				$this->topic_first_poster_colour = $user->user_colour;
				$this->save();
				
				// Update forum chain.
				while ($forum != null)
				{
					$forum->forum_topics_approved = $forum->forum_topics_approved + 1;
					$forum->save();
					
					$forum = $forum->parent;
				}
			}
		}
		
		return $this;
	}
}