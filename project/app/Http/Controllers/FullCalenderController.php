<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Track;
use App\Models\session;
// use App\Models\Event;

class FullCalenderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        }

    function track(){
    $tracks = Track::all();
      // return view('sidebar', ["key" => $tracks]);
    }


	public function trackindex(Request $request)
    {  $tracks = Track::all();
    	if($_SERVER['REQUEST_METHOD'] == "GET")
    	{
    		$data = session::where('track_name', '=',"php")

                        ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
return view('show',["key" => $tracks]);

    }

    public function index(Request $request)
    {   $tracks = Track::all();
    	if($request->ajax())
    	{

    		$data = session::where('track_name', '=',".net")
			->whereDate('start', '>=', $request->start)
                        ->whereDate('end',   '<=', $request->end)
                        ->get(['id', 'title', 'start', 'end']);
            return response()->json($data);
    	}
    	return view('full-calender',["key" => $tracks]);
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = session::create([
					'instructor_name'		=>	$request->instructor_name,
					'title'		=>	$request->title,
    				'track_name'		=>	$request->track_name,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = session::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = session::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
?>
