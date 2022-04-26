<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use App\Models\Customers;
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
        // echo 'customer page '; exit; 
        $customers = Customers::get(); 
        return view('customers.index',compact('customers'));
    }

}
    