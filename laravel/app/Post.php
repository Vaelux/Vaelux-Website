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


class Post extends model
{
	public $timestamps = false;
	protected $table = 'phpbb_posts';
	
	protected $primaryKey = 'post_id';
	
	protected $dates =
	[
		'post_time',
	    'post_edit_time',
	    'post_delete_time'
	];
	
	public function topic()
	{
		return $this->belongsTo('App\Topic', 'topic_id', 'topic_id');
	}
	
	public function forum()
	{
		return $this->belongsTo('App\Forum', 'forum_id', 'forum_id');
	}
	
	public function poster()
	{
		return $this->belongsTo('App\User', 'user_id', 'user_id');
	}
	
	public function CreatePost(Topic $topic, User $user, string $text)
	{
		// Update post.
		$this->topic_id        = $topic->topic_id;
		$this->forum_id        = $topic->forum_id;
		$this->poster_id       = $user->user_id;
		$this->poster_ip       = '127.0.0.1';
		$this->post_time       = time();
		$this->post_subject    = $topic->topic_title;
		$this->post_text       = $text;
		$this->post_visibility = 1;
		
		if ($this->save())
		{
			// Update topic.
			$topic->topic_last_post_id       = $user->user_id;
			$topic->topic_last_poster_name   = $user->username;
			$topic->topic_last_poster_colour = $user->user_colour;
			$topic->topic_posts_approved     = $topic->topic_posts_approved + 1;
			$topic->save();
			
			// Update forum chain.
			$forum = $topic->forum;
			
			while ($forum != null)
			{
				$forum->forum_last_post_id       = $user->user_id;
				$forum->forum_last_poster_id     = $user->user_id;
				$forum->forum_last_poster_name   = $user->username;
				$forum->forum_last_poster_colour = $user->user_colour;
				$forum->forum_last_post_subject  = $topic->topic_title;
				$forum->forum_last_post_time     = $this->post_time;
				$forum->forum_posts_approved     = $forum->forum_posts_approved + 1;
				$forum->save();
				
				$forum = $forum->parent;
			}
			
			// Update user.
			$user->user_posts = $user->user_posts + 1;
			$user->save();
			
			// Update topics_posted table.
			DB::Insert
			(
				'INSERT INTO phpbb_topics_posted (user_id, topic_id, topic_posted) VALUES (?, ?, ?)',
				[
					$user->user_id,
					$topic->topic_id,
					1
				]
			);
		}
		
		return $this;
	}
}