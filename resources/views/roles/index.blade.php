@extends('layouts.app_new')
@section('page-heading', 'Roles')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       Roles
    </li>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Roles</h2>
                <div class="d-flex flex-row-reverse">
                    <a href="{{ route('roles.create')}}" class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" > <i class="fas fa-plus"></i>Add Roles  </a>
                    </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table" id="tableUser">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    <th>No. </th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created At </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($roles as $row)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->description}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>
                                        <a class="btn btn-icon" title="Edit" href="{{ route('roles.edit',$row->id) }}"> <i class="fas fa-edit"></i> </a>
                                        <a class="btn btn-icon" title="Delete" href="{{ route('roles.delete',$row->id) }}"> <i class="fas fa-trash"></i> </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="pagination1">
                {{ $roles->render() }}    
            </div>
            
        </div>
    </div>

@stop
