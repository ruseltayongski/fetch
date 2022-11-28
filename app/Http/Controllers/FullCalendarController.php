<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class FullCalendarController extends Controller
{
    public function index(Request $request) {
        $user = auth()->user();
        if($request->ajax()) {
            $data = Event::whereDate('start', '>=', $request->start)
                        ->whereDate('end', '<=', $request->end)
                        ->get(['id', 'title', 'start', 'end','created_by']);

                return response()->json($data);
        }
        return view('full-calender', compact('user'));
    }


    public function action(Request $request)
    {
		$user = auth()->user();
		
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
				$event_exist = Event::where("start",$request->start)->where("end",$request->end)->first();
				$already_booked = Event::where("created_by",$user->id)->first();
				if($event_exist) {
					return "exist";
				}
				elseif($already_booked) {
					return "already_booked";
				}
    			$event = Event::create([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end,
					'created_by' => $user->id
    			]);
    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
				$has_exist = Event::where("start", $request->start)->where("end",$request->end)->first();

				if($has_exist) {
					return "unauthorized";
				}
    			$event = Event::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end,
					'created_by' => $user->id
					
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Event::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
