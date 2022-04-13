@extends('layouts.app_new')
@section('page-heading', 'Roles')
@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('roles') }}"> Roles</a>
    </li>
    <li class="breadcrumb-item active">
        Edit 
    </li>
@stop
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit Roles</h2>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    
                    <form id="edit-role" action="{{route('roles.storeedit')}}" method="POST" name="edit-role">
                        {{ csrf_field() }}
                        <input type="hidden" name="role_id" value="{{$role->id}}">
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$role->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description  </label>
                            <textarea class="form-control" id="description" name="description" required>{{$role->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Update" required>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@stop
