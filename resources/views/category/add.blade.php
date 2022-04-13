@extends('layouts.app_new')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Add Category</h2>
                
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    
                    <form id="formUser" action="{{route('category.store')}}" method="POST" name="formUser">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name </label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description  </label>
                            <textarea class="form-control" id="description" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Save" required>
                        </div>
                      <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
