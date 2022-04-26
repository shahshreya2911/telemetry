@extends('layouts.app_new')
@section('page-heading', 'Plugins')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Plugins
    </li>
@stop

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Plugins</h2>
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
                                    <th>Slug</th>
                                    <th>Active</th>
                                    <th>Inactive</th>
                                    <th>Installed</th>
                                    <th>Cached Active </th>
                                    <th>Cached Inactive</th>
                                    <th>Cached Installed</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($plugins as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->slug}}</td>
                                        <td>{{$row->active}}</td>
                                        <td>{{$row->inactive}}</td>
                                        <td>{{$row->installed}}</td>
                                        <td>{{$row->cached_active}}</td>
                                        <td>{{$row->cached_inactive}}</td>
                                        <td>{{$row->cached_installed}}</td>
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
