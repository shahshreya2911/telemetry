@extends('layouts.app_new')
@section('page-heading', 'Dashboard')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Dashboard
    </li>
@stop
@section('content')

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-lg-12">
                    <!--begin::Mixed Widget 1-->
                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                        <!--begin::Header-->
                        <div class="card-header border-0 bg-primary py-5">
                            <h3 class="card-title font-weight-bolder text-white">Admin Dashboard </h3>
                            <div class="text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis amet magni, facere consectetur quo, voluptas id ab praesentium eos necessitatibus distinctio quia aliquid, quas impedit tempora deserunt repellat iure quibusdam.</div>
                            
                        </div>

                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0 position-relative overflow-hidden">

                            <!--begin::Chart-->
                            <div id="" class="card-rounded-bottom bg-primary" style="height: 200px"></div>
                            <!--end::Chart-->
                            <!--begin::Stats-->
                            <div class="card-spacer mt-n25 dashboard">

                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <i class="fas fa-user-tie text-primary" aria-hidden="true"></i>
                                            </span>
                                            <a href="{{route('users')}}" class="text-primary font-weight-bold font-size-h6 mt-2"><b>{{$count_user}}</b> Users</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col bg-light-danger px-6 py-8 rounded-xl mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <i class="fas fa-users text-danger" aria-hidden="true"></i>
                                            </span>
                                            <a href="{{route('customers')}}" class="text-danger font-weight-bold font-size-h6 mt-2"><b>{{$count_customer}}</b> Customers</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col bg-light-success px-6 py-8 rounded-xl mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <i class="fa fa-desktop text-success" aria-hidden="true"></i>
                                            </span>
                                            <a href="{{route('sites')}}" class="text-success font-weight-bold font-size-h6 mt-2"><b>{{$count_site}}</b> Sites</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col bg-light-warning px-6 py-8 rounded-xl mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                <i class="fas fa-qrcode text-warning" aria-hidden="true"></i>
                                            </span>
                                            <a href="{{route('plugins')}}" class="text-warning font-weight-bold font-size-h6 mt-2"><b>{{$count_plugins}}</b> Plugins</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <i class="far fa-calendar-alt text-primary" aria-hidden="true"></i>
                                            </span>
                                            <a href="{{route('events')}}" class="text-primary font-weight-bold font-size-h6 mt-2"><b>{{$count_events}}</b> Events</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col bg-light-danger px-6 py-8 rounded-xl mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <i class="fas fa-thumbtack text-danger" aria-hidden="true"></i>
                                            </span>
                                            <a href="{{route('webhooks')}}" class="text-danger font-weight-bold font-size-h6 mt-2"><b>{{$count_webhooks}}</b> Webhooks</a>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="col bg-light-success px-6 py-8 rounded-xl mb-7">
                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <i class="fa fa-list-alt text-success" aria-hidden="true"></i>
                                            </span>
                                            <a href="{{route('reports')}}" class="text-success font-weight-bold font-size-h6 mt-2"><b>{{$count_reports}}</b> Reports</a>
                                        </div>
                                    </div>
                                   
                                  </div>
                                </div>
                    
                               
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Mixed Widget 1-->
                </div>
           
            </div>
        </div>
        <!--end::Container-->
    </div>

@stop
