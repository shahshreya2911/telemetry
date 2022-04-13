@extends('layouts.app_new')
@section('page-heading', 'Users')
@section('breadcrumbs')
    <li class="breadcrumb-item">
        <a href="{{ route('users') }}"> Users</a>
    </li>
    <li class="breadcrumb-item active">
        Add 
    </li>
@stop
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Add User</h2>
                
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    
                    <form id="create-user" action="{{route('users.store')}}" method="POST" name="create-user" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        
                     <!--    <div class="form-group">
                            <label for="image" class="col-md-12">Image  </label>
                            <img src="" id="selected_img" class="selected_img  " height="100px" width="100px" style="display: none;">
                            <input type="file" class="form-control" id="image" name="image" required>
                            
                        </div> -->
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Save" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@push('scripts')
<script>
    
    $('document').ready(function () {

        $(':input[type=file]').change( function(event) {
            $('#selected_img').show(); 
            var tmppath = URL.createObjectURL(event.target.files[0]);
            $('#selected_img').attr('src',tmppath);
        });

    });

</script>
@endpush