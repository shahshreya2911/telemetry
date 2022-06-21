<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\User;
use App\Models\Roles;
use App\Models\Events;
use App\Models\Sites;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Validator; 
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ManageChartsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         
    } 

    public function index(Request $request)
    {
        
        $marchData = []; 
        $AprData = []; 
        $users = User::get(); 
        foreach($users as $key => $value){
            $month = $value->created_at->format('m'); 
            $day = $value->created_at->format('d'); 
            
            if($month == '03'){
                array_push($marchData,$day);
            }
            if($month == '04'){
                array_push($AprData,$day);
            }
            // echo ' <br> month '.$month.' date : '.$day;  
        }

        $marchCount = array_count_values($marchData);
        for($i = 1; $i <= 31; $i++)
        {
            if(!isset($marchCount[$i]))
            {
                $marchCount[$i] = 0;
            }
        }
        // $marchAllData = ksort($marchCount);
        $marchAllData = $marchCount; 


        $AprCount = array_count_values($AprData);
        for($i = 1; $i <= 31; $i++)
        {
            if(!isset($AprCount[$i]))
            {
                $AprCount[$i] = 0;
            }
        }
        // $aprAllData = ksort($AprCount);
        $aprAllData = $AprCount; 
       

        $year = ['2015','2016','2017','2018','2019','2020'];
        $user = ['25','12','0','20','2','37'];
        $user2 = ['28','0','37','25','0','30'];

        $days = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']; 
        $color = ['#ffcccc','#ffffcc','#ccf2ff','#ffd9cc','#e6ccff','#f2ffcc'];

        return view('charts.index')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK))->with('user2',json_encode($user2,JSON_NUMERIC_CHECK))->with('color',json_encode($color,JSON_NUMERIC_CHECK))->with('days',json_encode($days,JSON_NUMERIC_CHECK))->with('marchAllData',json_encode($marchAllData,JSON_NUMERIC_CHECK))->with('aprAllData',json_encode($aprAllData,JSON_NUMERIC_CHECK));
    }


    public function eventChart(){
        echo 'here '; 
        echo '<pre> '; 
        
        $today= Carbon::now();
        $totaldays = $today->month($today->month)->daysInMonth;
        $days = []; 
        for ($i=1; $i <= $totaldays ; $i++) { 
            array_push($days,$i);
        }

        echo ' | month: '.$today->month;
        echo ' | year: '.$today->year;



        // $days=cal_days_in_month(CAL_GREGORIAN,$today->month,$today->year);

        $events = Events::get();

        foreach ($events as $key => $value) {
            echo '<br> '; 
            echo $value->_id; 
            print_r($value); 
        }

        print_r($days); 

        // use App\Models\Sites;
        
        // print_r($events); 

        exit; 
        return view('charts.user-chart')->with('days',json_encode($days,JSON_NUMERIC_CHECK))->with('marchAllData',json_encode($marchAllData,JSON_NUMERIC_CHECK))->with('aprAllData',json_encode($aprAllData,JSON_NUMERIC_CHECK));
    }

}
    