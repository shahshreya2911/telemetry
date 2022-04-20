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
        return view('test')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));

        exit; 


        $data = [['label'=>'Monday', 'data'=>3], ['label'=>'Tuesday', 'data'=>50], ['label'=>'Wednesday', 'data'=>12], ['label'=>'Thrusday', 'data'=>8], ['label'=>'Friday', 'data'=>18], ['label'=>'Satuerday', 'data'=>25], ['label'=>'Sunday', 'data'=>15]]; 

        $data['chart_data'] = json_encode($data);
        return view('test', $data);
        exit; 
        return view('test',compact('chart'));

        exit; 
        return view('test');
        exit; 
        echo 'test'; 
        $users = Users::get(); 
        print_r($users); 

        exit; 
        $data = array(
            'count_user' => DB::table('users')->count(),
            'menu'      => 'menu.v_menu_admin',
            'content' => 'content.view_dashboard'
        );
        return view('layouts.v_template',$data);
    }
}
