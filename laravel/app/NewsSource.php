<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

require_once('simple_html_dom.php');

class NewsSource extends Model
{
	public $timestamps = false;
	public $html;
	public $items;
	public $max_items;
	public $parser_item_class;
	
	public function items()
	{
		return $this->hasMany('App\NewsItem');
	}
	
	public function Parse()
	{
		$this->max_items = 2;
		
		// Create DOM from URL
		$this->html = file_get_html($this->link);
		
		$this->DoParse();
	}
	
	protected function DoParse()
	{
		$this->items = array();
		
		//$class = $this->parser_item_class;
		
		// Find all article blocks
		foreach ($this->html->find($this->item_markup_wrapper) as $article)
		{
			$item = new NewsItem;
			$item->news_source_id = $this->id;
			
			$item->Parse($article);
			
			//$this->items[] = $item;
			
			$this->max_items--;
			
			if ($this->max_items <= 0)
			{
				break;
			}
		}
		
		
		$this->last_scape_date = date("Y-m-d H:i:s", time());
		
		$this->save();
	}
}
