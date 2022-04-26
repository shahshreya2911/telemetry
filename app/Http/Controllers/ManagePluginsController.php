<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use App\Models\Plugins;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Validator; 
use Illuminate\Support\Facades\Validator;


class ManagePluginsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         
    } 

    public function index(Request $request)
    {
        // echo 'plugins page '; exit; 
        $plugins = Plugins::get(); 
        return view('plugins.index',compact('plugins'));
    }

}
    