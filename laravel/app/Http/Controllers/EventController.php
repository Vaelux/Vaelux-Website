<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CalendarEvent;

class EventController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}
	
	public function Get(Request $request, CalendarEvent $event)
	{
		$parsed_event =
		[
			'title'       => $event->title,
			'description' => $event->description,
			'start'       => $event->start,
			'end'         => $event->end,
		];
		
		return response()->json($parsed_event, 200);
	}
	
	public function GetAll(Request $request)
	{
		$events = CalendarEvent::where('start', '>=', $request->input('start'))->where('start', '<=', $request->input('end'))->get();
		
		$fullCalendarEvents = array();
		
		foreach ($events as $event)
		{
			$fullCalendarEvents[] =
			[
				'event_id' => $event->id,
				'title'    => $event->title,
				'start'    => $event->start,
				'end'      => $event->end,
			];
		}
		
		return response()->json($fullCalendarEvents, 200);
	}
	
	/**
	 *
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function Update(Request $request, CalendarEvent $event)
	{
		$event->title                    = $request->title;
		$event->description              = $request->description;
		//$event->game                     = $request->game;
		//$event->background_image         = $request->background_image;
		//$event->icon                     = $request->icon;
		//
		//$event->start                    = $request->start;
		//$event->end                      = $request->end;
		//$event->all_day                  = $request->all_day;
		//
		//$event->text_color               = $request->text_color;
		//$event->background_color         = $request->background_color;
		//$event->border_color             = $request->border_color;
		//
		//$event->allow_signups            = $request->allow_signups;
		//
		//$event->discord_notify           = $request->discord_notify;
		//$event->discord_notify_by_pm     = $request->discord_notify_by_pm;
		//
		//$event->discord_notify_on_change = $request->discord_notify_on_change;
		//$event->discord_notify_on_delete = $request->discord_notify_on_delete;
		//$event->discord_notify_on_start  = $request->discord_notify_on_start;
		//$event->discord_notify_on_signup = $request->discord_notify_on_signup;
		//$event->discord_notify_on_1_hour = $request->discord_notify_on_1_hour;
		//$event->discord_notify_on_1_day  = $request->discord_notify_on_1_day;
		//$event->discord_notify_on_1_week = $request->discord_notify_on_1_week;
		
		$event->modified_by               = 2; // TODO
		
		$event->save();
		
		return response()->json([], 200);
	}
}
