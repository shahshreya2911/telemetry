<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index(Request $request)
    {
        $categories = Categories::get(); 
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.add');
    }

    public function store(Request $request)
    {   
        // echo '<pre>';
        // print_r($request->all());
        // exit; 
     
        $data = new Categories();
        $data->name = $request->name;
        $data->description = $request->description; 
        $data = $data->save();

        return redirect()->route('category')->withSuccess("Category Added Successfully.");

    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return view('category.edit',compact('category'));

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        echo 'delete page '; 
        $category = Categories::find($id)->delete();
        // User::find($id)->delete();

        return redirect()->route('category')->withSuccess("Category Deleted Successfully.");

        // return response()->json(['success'=>'Customer deleted!']);
    }
}
