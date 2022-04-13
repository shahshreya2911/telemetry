<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CustomerMeta;
use App\Http\Controllers\Controller;

class CustomerMetaController extends Controller
{

    public function index()
    {
        // Get All CustomerMeta
        // get All CustomerMeta From Database
        $data = CustomerMeta::all();
        return response()->json(['status'=>'success', 'message'=>'All Customer-meta List ', 'data'=>$data], 200);

    }


    public function store(Request $request)
    {
        // echo '<pre>'; 
        // print_r($request->all());
        // exit; 

        $data = new CustomerMeta();
        $data->cusotmer_id = $request->cusotmer_id;
        $data->meta_key = $request->meta_key;
        $data->meta_value = $request->meta_value;
        $data->save();
        
        return response()->json(['status'=>'success', 'message'=>'Customer-meta Created Successfully', 'data'=>$data], 200);

    }


}
