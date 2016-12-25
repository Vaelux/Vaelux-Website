<?php

namespace App;

use Discord\Exceptions\DiscordRequestFailedException;
use Illuminate\Database\Eloquent\Model;
use DB;

require_once('simple_html_dom.php');

class NewsItem extends Model
{
	public $timestamps = false;
	
	public function newsSource()
	{
		return $this->belongsTo('App\NewsSource');
	}
	
	public function Parse($html)
	{
		$this->BeforeParse($html);
		$this->DoParse($html);
		$this->AfterParse($html);
		
		if ($this->NewsSource->follow_items)
		{
			$this->BeforeParseItem($html);
			$this->DoParseItem($html);
			$this->AfterParseItem($html);
		}
		
		$this->save();
		
		if($this->NewsSource->post_to_forum)
		{
			$topic = new Topic();
			if ($topic->CreateTopic
				(
					Forum::where('forum_id', $this->NewsSource->local_forum_id)->first(),
					User::where('username', 'Yeoman')->first(),
					$this->title,
					$this->content
				)->id != null)
			{
				$this->posted = true;
				
				$this->save();
			}
		}
		
		if($this->NewsSource->post_to_discord)
		{
			$message = ':newspaper: **' . $this->NewsSource->game . '**: ' . $this->title . "\n";
			
			if ($this->NewsSource->post_to_forum)
			{
				$message .= 'http://forum.vaelux.org/viewtopic.php?f=' . $topic->forum->forum_id . '&t=' . $topic->topic_id;
			}
			else
			{
				$message .= $this->link;
			}
			
			$command                 = new DiscordCommand();
			$command->command_type   = DiscordCommandType::Where('command', 'message_channel')->first()->id;
			$command->target_channel = DiscordChannel::where('name', 'game_news')->first()->id;
			$command->created_at     = time();
			$command->message        = $message;
				
			$command->save();
		}
	}
	
	protected function BeforeParse($html)
	{
		
	}
	
	protected function DoParse($html)
	{
		$this->link        = $html->find('header', 0)->find('a', 0)->href;
		$this->item_date   = date("Y-m-d H:i:s",strtotime(trim($html->find('time', 0)->plaintext)));
		$this->scrape_date = date("Y-m-d H:i:s", time());
		$this->title       = trim($html->find('div.dev-post-excerpt', 0)->find('p', 0)->plaintext);
	}
	
	protected function AfterParse($html)
	{
		
	}
	
	protected function BeforeParseItem($html)
	{
		
	}
	
	protected function DoParseItem($html)
	{
		$item_html = file_get_html($this->link);
		
		$this->content = trim($item_html->find('div.post-content', 0)->innertext);
	}
	
	protected function AfterParseItem($html)
	{
		
	}
}
