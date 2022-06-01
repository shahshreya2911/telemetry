<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Users;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Validator; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ManageUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
      
    } 

    public function index(Request $request)
    {
        // echo url('/');exit; 
        $users = Users::where('role','!=', 'admin')
                ->orderBy('created_at','desc')
                ->get(); 

        return view('users.index',compact('users'));
    }

    public function create()
    {
        return view('users.add');
    }

    public function store(Request $request)
    {
        // echo '<pre>'; 
        // print_r($request->all()); 
        // exit; 

        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            // 'role' => 'required',
        ]);


        // if(!empty($request->image))
        // {
        //     $image = $request->image;
        //     $ext = $request->image->getClientOriginalExtension();

        //     $path = public_path('/assets/image/users');
        //     $image_name = time().".".$ext;
        //     $image->move($path,$image_name);
        //     //echo "File found ";
        // }
        // else{
        //     $image_name = '';
        //     //echo "File Not Found ";
        // }

        $data = new Users();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = 'editor'; 
        // $data->image = $image_name;
        $data = $data->save();

        return redirect()->route('users')->withSuccess("User Added Successfully.");
    }

    public function edit($id)
    {
        $user = Users::find($id);

        // $roles = Roles::where('id','!=',1)->get(); 
        return view('users.edit',compact('user'));
    }

    public function storeedit(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required',
        ]);

        $data = Users::find($request->user_id);
        $data->name = $request->name;
        if(!empty($request->password)){
            $data->password = Hash::make($request->password);
        }
        $data->save();
        return redirect()->route('users')->withSuccess("User Updated Successfully.");
    }

    public function delete($id)
    {
        // User::find($id)->delete();
        $data = Users::find($id)->delete();
        return redirect()->route('users')->withSuccess("User Deleted Successfully.");
    }
}
