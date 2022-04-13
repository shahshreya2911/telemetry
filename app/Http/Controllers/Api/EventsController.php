<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{

    public function index()
    {
        // Get All Events
        // get All Events From Database
        $data = Events::all();
        return response()->json(['status'=>'success', 'message'=>'All Events List ', 'data'=>$data], 200);

    }


    public function store(Request $request)
    {
        // echo '<pre>'; 
        // print_r($request->all());
        // exit; 

        $data = new Events();
        $data->user_id = $request->user_id;
        $data->site_id = $request->site_id;
        $data->type = $request->type;
        $data->value = $request->value;
        $data->save();
        
        return response()->json(['status'=>'success', 'message'=>'Event Created Successfully', 'data'=>$data], 200);

    }

}
