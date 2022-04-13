<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ManageRolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
        $roles = Roles::paginate(5); 
        return view('roles.index',compact('roles'));
    }

    public function create()
    {
        return view('roles.add');
    }

    public function store(Request $request)
    {   
        // echo '<pre>';
        // print_r($request->all());
        // exit; 
     
        $data = new Roles();
        $data->name = $request->name;
        $data->description = $request->description; 
        $data = $data->save();

        return redirect()->route('roles')->withSuccess("Role Added Successfully.");

    }

    public function edit($id)
    {
        $role = Roles::find($id);
        return view('roles.edit',compact('role'));
    }

    public function storeedit(Request $request)
    {
        $data = Roles::find($request->role_id);
        $data->name = $request->name;
        $data->description = $request->description; 
        $data = $data->save();

        return redirect()->route('roles')->withSuccess("Role Updated Successfully.");
    }

    public function delete($id)
    {

        $data = Roles::find($id)->delete();

        return redirect()->route('roles')->withSuccess("Role Deleted Successfully.");

        // return response()->json(['success'=>'Customer deleted!']);
    }
}
