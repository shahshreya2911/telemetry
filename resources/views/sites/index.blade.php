@extends('layouts.app_new')
@section('page-heading', 'Sites')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Sites
    </li>
@stop

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Sites</h2>
                <!-- <div class="d-flex flex-row-reverse">
                    <a href="{{ route('users.create')}}" class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" > <i class="fas fa-plus"></i>Add User  </a>
                </div> -->
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table" id="tableUser">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    <th>Sr. No. </th>
                                    <th>Site Key</th>
                                    <th>WP version</th>
                                    <th>Host</th>
                                    <th>Active Plugins</th>
                                    <th>Inactive Plugins</th>
                                    <th>Installed Plugins</th>
                                    <th>IP Address</th>
                                    <th>Date Activated</th>
                                    <th>Last Heard From</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($sites as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->site_key}}</td>
                                        <td>{{$row->wp_version}}</td>
                                        <td>{{$row->host}}</td>
                                        <td>{{$row->active_plugins}}</td>
                                        <td>{{$row->inactive_plugins}}</td>
                                        <td>{{$row->installed_plugins}}</td>
                                        <td>{{$row->ip_address}}</td>
                                        <td>{{$row->date_activated}}</td>
                                        <td>{{$row->last_heard_from}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script>
    $('document').ready(function () {
        // table serverside
        var table = $('#tableUser').DataTable({
        });
    });
</script>
@endpush

@stop
