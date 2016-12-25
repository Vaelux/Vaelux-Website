<?php
/**
*
* Listen For Posts extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Vaelux <siegen.maulerant@gmail.com>
* @license MIT
*
*/

namespace vaelux\listenforposts\event;

/**
* @ignore
*/
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/**
	 * @return array
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.submit_post_end' => 'ProcessPost',
		);
	}
	
	/**
	 * listener constructor.
	 */
	public function __construct()
	{
	}
	
	/**
	 * @param $event
	 *
	 * @return array
	 */
	protected function Setup($event)
	{
		// Other $event['data'] keys
		/*
			'notify' => boolean false
			'notify_set' => int 0
			'attachment_data' =>
				array (size=0)
					empty
			'filename_data' =>
				array (size=1)
					'filecomment' => string '' (length=0)
		 */
		
		$topic =
		[
			'id'            => $event['data']['topic_id'],
			'title'         => $event['data']['topic_title'],
			'visibility'    => $event['data']['topic_visibility'],
			'forum_name'    => $event['data']['forum_name'],
			'forum_id'      => $event['data']['forum_id'],
			'forum_parents' => $event['data']['forum_parents'],
			'first_post_id' => $event['data']['topic_first_post_id'],
			'last_post_id'  => $event['data']['topic_last_post_id'],
			'time_limit'    => $event['data']['topic_time_limit'],
			'attachment'    => $event['data']['topic_attachment'],
			'icon_id'       => $event['data']['icon_id'],
			'status'        => $event['data']['topic_status'],
		    'is_new'        => $event['data']['topic_first_post_id'] == $event['data']['topic_last_post_id'],
		];
		
		$post =
		[
			'id'              => $event['data']['post_id'],
			'message'         => $event['data']['message'],
			'message_md5'     => $event['data']['message_md5'],
			'poster_id'       => $event['data']['poster_id'],
			'poster_ip'       => $event['data']['poster_ip'],
			'visibility'      => $event['data']['post_visibility'],
			'enable_sig'      => $event['data']['enable_sig'],
			'enable_bbcode'   => $event['data']['enable_bbcode'],
			'enable_smilies'  => $event['data']['enable_smilies'],
			'enable_urls'     => $event['data']['enable_urls'],
			'enable_indexing' => $event['data']['enable_indexing'],
			'checksum'        => $event['data']['checksum'],
			'edit_reason'     => $event['data']['post_edit_reason'],
			'edit_user'       => $event['data']['post_edit_user'],
			'edit_locked'     => $event['data']['post_edit_locked'],
			'bbcode_bitfield' => $event['data']['bbcode_bitfield'],
			'bbcode_uid'      => $event['data']['bbcode_uid'],
		];
		
		$this->ParseForumParents($topic);
		
		return [$topic, $post];
	}
	
	protected function ParseForumParents(&$topic)
	{
		$matches = array();
		preg_match_all('/"(.+)"/U', $topic['forum_parents'], $matches);
		
		$topic['forum_parents_names'] = $matches[1];
	}
	
	/**
	 * @param $event
	 */
	public function ProcessPost($event)
	{
		list($topic, $post) = $this->Setup($event);
		
		// If this post is a new thread...
		if($topic['is_new'])
		{
			// If this post is in the News & Announcements forum...
			if ($topic['forum_name'] == 'News & Announcements')
			{
				$message = ':loudspeaker: ' . $topic['title'] . "\n" . 'http://forum.vaelux.org/viewtopic.php?f=' . $topic['forum_id'] . '&t=' . $topic['id'];
				
				$command                 = new \App\DiscordCommand();
				$command->command_type   = \App\DiscordCommandType::Where('command', 'message_channel')->first()->id;
				$command->target_channel = \App\DiscordChannel::where('name', 'news')->first()->id;
				$command->created_at     = time();
				$command->message        = $message;
				
				$command->save();
			}
			
			// If this post is in a game news forum...
			if ($topic['forum_name'] == 'News' && in_array("Games", $topic['forum_parents_names']))
			{
				$message = ':newspaper: **' . $topic['forum_parents_names'][count($topic['forum_parents_names']) - 1] . '**: ' . $topic['title'] . "\n" . 'http://forum.vaelux.org/viewtopic.php?f=' . $topic['forum_id'] . '&t=' . $topic['id'];
				
				$command                 = new \App\DiscordCommand();
				$command->command_type   = \App\DiscordCommandType::Where('command', 'message_channel')->first()->id;
				$command->target_channel = \App\DiscordChannel::where('name', 'game_news')->first()->id;
				$command->created_at     = time();
				$command->message        = $message;
				
				$command->save();
			}
		}
	}
}
