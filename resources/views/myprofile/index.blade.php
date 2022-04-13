@extends('layouts.app_new')
@section('page-heading', 'My Profile')
@section('breadcrumbs')
    <li class="breadcrumb-item active">
       My Profile
    </li>
@stop

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>My Profile</h2>
                <div class="d-flex flex-row-reverse">
                    
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    
                    <form id="edit-myprofile" action="{{route('myprofile.update')}}" method="POST" name="edit-myprofile" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{$user->id}}" required>
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}"  required readonly >
                        </div>
                       
                      
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Save" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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

@stop
