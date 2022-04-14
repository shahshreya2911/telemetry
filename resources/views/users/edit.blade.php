@extends('layouts.app_new')
@section('page-heading', 'Users')
@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('users') }}"> Users</a>
    </li>
    <li class="breadcrumb-item active">
        Edit 
    </li>
@stop
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Edit User</h2>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    
                    <form id="create-user" action="{{route('users.storeedit')}}" method="POST" name="create-user" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->id}}" required>
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required readonly >
                        </div>
                      <!--   <div class="form-group">
                            <label for="password">Password </label>
                            <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}"  required>
                        </div> -->
                        <!-- 
                        <div class="form-group">
                            <label for="image" class="col-md-12">Image  </label>
                            <img src="" id="selected_img" class="selected_img  " height="100px" width="100px" style="display: none;">
                            <input type="file" class="form-control" id="image" name="image" required>
                            
                        </div> -->
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Update" required>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@stop
