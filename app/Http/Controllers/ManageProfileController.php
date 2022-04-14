<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Validator; 
use Illuminate\Support\Facades\Validator;


class ManageProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         
    } 

    public function index(Request $request)
    {
        // echo url('/');exit; 
        $user = auth()->user(); 
        return view('myprofile.index',compact('user'));
    }


    public function update(Request $request)
    {
        // echo '<pre>'; 
        // print_r($request->all()); 
        // exit; 

        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
        ]);


        $data = User::find($request->user_id);
        $data->name = $request->name;
        if(!empty($request->password)){
            $data->password = Hash::make($request->password);
        }
        $data = $data->save();

        return redirect()->route('users')->withSuccess("User Added Successfully.");
    }


}
