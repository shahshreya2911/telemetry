<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use App\Models\Events;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Validator; 
use Illuminate\Support\Facades\Validator;


class ManageEventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         
    } 

    public function index(Request $request)
    {
        // echo 'events page '; exit; 
        $events = Events::get(); 
        return view('events.index',compact('events'));
    }

}
    