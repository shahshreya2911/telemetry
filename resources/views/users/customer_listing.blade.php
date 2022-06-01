@extends('layouts.app_new')
@section('page-heading', 'Customers')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Customers
    </li>
@stop

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Customers</h2>
               <!--  <div class="d-flex flex-row-reverse">
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th style="width:90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($users as $row)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>
                                            <a class="btn btn-icon" title="Edit" href="{{ route('users.edit',$row->id) }}"> <i class="fas fa-edit"></i> </a>
                                            <a class="btn btn-icon" title="Delete" href="{{ route('users.delete',$row->id) }}"> <i class="fas fa-trash"></i> </a>
                                        </td>
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
