@extends('layouts.app_new')
@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Categories</h2>
                <div class="d-flex flex-row-reverse">
                    <a href="{{ route('category.create')}}" class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" > <i class="fas fa-plus"></i>add Category  </a>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($categories as $row)
                                    <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->name}}</td>
                                <td>
                                    <a class="btn btn-icon" title="Edit" href="{{ route('category.edit',$row->id) }}"> <i class="fas fa-edit"></i> </a>
                                    <a class="btn btn-icon" title="Delete" href="{{ route('category.delete',$row->id) }}"> <i class="fas fa-trash"></i> </a>
                                    <!-- <a href="{{ route('category.delete', $row->id) }}" class="btn btn-icon" title="Delete" >
                                        <i class="fas fa-trash"></i>
                                    </a> -->
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


<!-- Modal-->
<div class="modal fade" id="modal-user" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">Modal User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUser" name="formUser">
                    <div class="form-group">

                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama"><br>
                        <input type="email" name="email" class="form-control" id="email" placeholder="email"><br>
                        <select name="level" class="form-control" id="level">
                            <option value="-">Pilih Level</option>
                            <option value="1">Operator</option>
                            <option value="2">Member</option>
                        </select><br>
                        <input type="text" name="password" class="form-control" placeholder="password"><br>
                        <input type="hidden" name="user_id" id="user_id" value="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary font-weight-bold" id="saveBtn">Save changes</button>
            </div>
        </div>
    </div>
</div>

@stop
