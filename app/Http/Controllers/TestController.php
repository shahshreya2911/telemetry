<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Users;
use Charts;

class TestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $year = ['2015','2016','2017','2018','2019','2020'];
        $user = ['25','12','44','20','2','37'];
        $user2 = ['28','5','37','25','10','30'];
        $color = ['#ffcccc','#ffffcc','#ccf2ff','#ffd9cc','#e6ccff','#f2ffcc'];
        return view('test')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK))->with('user2',json_encode($user2,JSON_NUMERIC_CHECK))->with('color',json_encode($color,JSON_NUMERIC_CHECK));

        exit; 

    }

    public function linechart()
    {   
        // echo 'sdadasd'; 
        // exit; /

        $year = ['2015','2016','2017','2018','2019','2020'];
        $user = ['25','12','44','20','2','37'];
        $user2 = ['28','5','37','25','10','30'];
        $color = ['#ffcccc','#ffffcc','#ccf2ff','#ffd9cc','#e6ccff','#f2ffcc'];
        return view('test-linechart')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK))->with('user2',json_encode($user2,JSON_NUMERIC_CHECK))->with('color',json_encode($color,JSON_NUMERIC_CHECK));

        // exit; 

    }
}
