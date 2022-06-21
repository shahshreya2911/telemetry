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

        echo '<pre>'; 
        echo '<hr> days  list  : <br>  '; 
        print_r($days);
        echo '<hr> APR data   list  : <br>  '; 
        print_r($aprAllData);
        echo '<hr> march data  list  : <br>  '; 
        print_r($marchAllData);


        exit; 

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

        // $site_activated_list = []; 
        $events_list = []; 
        foreach ($events as $key => $value) {
            echo '<br> '; 
            echo $value->_id; 
            echo '<br> '; 
            
            $event_date = $value->created_at->format('d/m/Y'); 
            echo $event_date;             

            array_push($events_list,$event_date); 


            // print_r($value); 
            // $sitedata = Sites::find($value->site_id);
            // if(!empty($sitedata)){
            //     echo $sitedata->date_activated; 
            //     array_push($site_activated_list,$sitedata->date_activated);
            //  // print_r($sitedata); 
            // }else{
            //     echo 'not found '; 
            // }
        }

        print_r($days); 
        echo '<hr> event list  : <br>  '; 
        print_r($events_list);
        echo '<hr> count event days  : <br>  '; 
        $event_data_final = print_r(array_count_values($events_list)); 


        $now = Carbon::now();

        $dates = [$now->format('d/m/Y')];

        for($i = 1; $i < 31; $i++) {
          $dates[] = $now->subDays(1)->format('d/m/Y');
        }

        echo '<hr> all dates  : <br>  '; 
        print_r($dates);

        foreach ($dates as $date_key => $date_value) {
            if(in_array($date_value, $event_data_final)){
                $event_data_final[$date_value] = 0; 
            }
        }



        // use App\Models\Sites;
        echo '<hr> '; 
        print_r($event_data_final); 

        exit; 
        return view('charts.user-chart')->with('days',json_encode($dates,JSON_NUMERIC_CHECK))->with('event_data_final',json_encode($event_data_final,JSON_NUMERIC_CHECK));
    }

}
    