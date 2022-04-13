<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\SiteMeta;
use App\Http\Controllers\Controller;

class SiteMetaController extends Controller
{

    public function index()
    {
        // Get All SiteMeta
        // get All SiteMeta From Database
        $data = SiteMeta::all();
        return response()->json(['status'=>'success', 'message'=>'All Site-meta List ', 'data'=>$data], 200);

    }


    public function store(Request $request)
    {
        // echo '<pre>'; 
        // print_r($request->all());
        // exit; 

        $data = new SiteMeta();
        $data->site_id = $request->site_id;
        $data->meta_key = $request->meta_key;
        $data->meta_value = $request->meta_value;
        $data->save();
        
        return response()->json(['status'=>'success', 'message'=>'Site-meta Created Successfully', 'data'=>$data], 200);
    }

}
