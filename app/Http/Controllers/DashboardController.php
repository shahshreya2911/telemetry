<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        if(auth()->user()->role == 'admin'){
            // echo 'admin dashboard here'; 
            $data = array(
                'count_user' => DB::table('users')->count(),
                'count_customer' => DB::table('customers')->count(),
                'count_site' => DB::table('sites')->count(),
                'count_plugins' => DB::table('plugins')->count(),
                'count_events' => DB::table('events')->count(),
                'count_webhooks' => DB::table('webhooks')->count(),
                'count_reports' => DB::table('reports')->count(),
            );
            return view('dashboard.admin',$data);
        }else{
            // echo 'user dashboard here';
            $data = array(
                'count_user' => DB::table('users')->count(),
                'count_customer' => DB::table('customers')->count(),
                'count_site' => DB::table('sites')->count(),
                'count_plugins' => DB::table('plugins')->count(),
                'count_events' => DB::table('events')->count(),
                'count_webhooks' => DB::table('webhooks')->count(),
                'count_reports' => DB::table('reports')->count(),
            );
            return view('dashboard.user',$data); 
        }
    }
}
