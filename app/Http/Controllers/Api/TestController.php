<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index()
    {
        echo 'my test page '; 
        exit; 
        // Get All Customers
        // get All Customers From Database
        $users = Users::all();
        return response()->json($users);

    }
    
}
