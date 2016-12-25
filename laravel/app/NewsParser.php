<?php

namespace App;

require_once('simple_html_dom.php');

class NewsParserItem_Old
{
	public static $item_wrapper;
	public $follow_items = false;
	
	public $source;
	public $link;
	public $item_date;
	public $scrape_date;
	public $title;
	public $content;
	
	function __construct($url)
	{
		$this->source = $url;
	}
	
	public function Parse($html)
	{
		$this->BeforeParse($html);
		$this->DoParse($html);
		$this->AfterParse($html);
		
		if($this->follow_items)
		{
			$this->BeforeParseItem($html);
			$this->DoParseItem($html);
			$this->AfterParseItem($html);
		}
	}
	
	protected function BeforeParse($html)
	{
		
	}
	
	protected function DoParse($html)
	{
		
	}
	
	protected function AfterParse($html)
	{
		
	}
	
	protected function BeforeParseItem($html)
	{
		
	}
	
	protected function DoParseItem($html)
	{
		
	}
	
	protected function AfterParseItem($html)
	{
		
	}
}

class NewsParserItem_ARMA3 extends NewsParserItem_Old
{
	public static $item_wrapper = 'article';
	public $follow_items = true;
	
	protected function DoParse($html)
	{
		parent::DoParse($html);
		
		$this->link        = $html->find('header', 0)->find('a', 0)->href;
		$this->item_date   = strtotime(trim($html->find('time', 0)->plaintext));
		$this->scrape_date = time();
		$this->title       = trim($html->find('div.dev-post-excerpt', 0)->find('p', 0)->plaintext);
	}
	
	protected function DoParseItem($html)
	{
		parent::DoParseItem($html);
		
		$item_html = file_get_html($this->link);
		
		$this->content = trim($item_html->find('div.post-content', 0)->innertext);
	}
}

class NewsParserItem_RSI extends NewsParserItem_Old
{
	public static $item_wrapper = 'item';
	
	protected function DoParse($html)
	{
		parent::DoParse($html);
		
		$this->link        = trim($html->find('link', 0)->plaintext);
		$this->item_date   = strtotime(trim($html->find('pubDate', 0)->plaintext));
		$this->scrape_date = time();
		$this->title       = trim($html->find('title', 0)->plaintext);
		$this->content     = trim($html->find('content:encoded', 0)->plaintext);
	}
}


class NewsParser_Old
{
	public $url;
	public $html;
	public $items;
	public $max_items;
	public $parser_item_class;
	
	public $url_mappings =
	[
		'robertsspaceindustries'    => 'NewsParserItem_RSI',
		'dev.arma3'                 => 'NewsParserItem_ARMA3',
	];
	
	function __construct()
	{
		//$xml                  = simplexml_load_file('https://robertsspaceindustries.com/comm-link/rss');
		//$parsed_results_array = array();
		//foreach ($xml as $entry)
		//{
		//	foreach ($entry->item as $item)
		//	{
		//		var_dump($item);die();
		//
		//		// $parsed_results_array[] = json_decode(json_encode($item), true);
		//		$items['title']         = (string)$item->title;
		//		$items['link']          = (string)$item->link;
		//		$items['content']       = (string)$item->content;
		//		$parsed_results_array[] = $items;
		//	}
		//}
		//
		//echo '<pre>';
		//print_r($parsed_results_array);
		
		
		
		$this->url = 'https://robertsspaceindustries.com/comm-link/rss';
		$this->url = 'https://dev.arma3.com/';
		
		$this->max_items = 1;
		
		$this->Parse();
		
		var_dump($this->items);
	}
	
	protected function Parse()
	{
		preg_match('%//(\S+)\.%', $this->url, $matches);
		
		$this->parser_item_class = __NAMESPACE__ . '\\' . $this->url_mappings[$matches[1]];
		
		// Create DOM from URL
		$this->html = file_get_html($this->url);
		
		$this->DoParse();
	}
	
	protected function DoParse()
	{
		$this->items = array();
		
		$class = $this->parser_item_class;
		
		// Find all article blocks
		foreach ($this->html->find($class::$item_wrapper) as $article)
		{
			$item = new $class($this->url);
			
			$item->Parse($article);
			
			$this->items[] = $item;
			
			$this->max_items--;
			
			if ($this->max_items <= 0)
			{
				break;
			}
		}
	}
}