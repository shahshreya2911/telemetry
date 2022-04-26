@extends('layouts.app_new')
@section('page-heading', 'Webhooks')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Webhooks
    </li>
@stop

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Webhooks</h2>
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
                                    <th>Site ID</th>
                                    <th>Status</th>
                                    <th>Target</th>
                                    <th>Headers</th>
                                    <th>Events </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($webhooks as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->site_id}}</td>
                                        <td>{{$row->status}}</td>
                                        <td>{{$row->target}}</td>
                                        <td>{{$row->headers1}}</td>
                                        <td>{{$row->events}}</td>
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
