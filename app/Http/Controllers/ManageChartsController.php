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


class ManageChartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         
    } 

    public function index(Request $request)
    {
        $marchData = User::get(); 
        exit; 

        $year = ['2015','2016','2017','2018','2019','2020'];
        $user = ['25','12','44','20','2','37'];
        $user2 = ['28','5','37','25','10','30'];
        $color = ['#ffcccc','#ffffcc','#ccf2ff','#ffd9cc','#e6ccff','#f2ffcc'];

        return view('charts.index')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK))->with('user2',json_encode($user2,JSON_NUMERIC_CHECK))->with('color',json_encode($color,JSON_NUMERIC_CHECK));
    }

}
    