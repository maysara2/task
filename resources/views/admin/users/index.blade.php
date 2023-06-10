
@extends('admin.master')

@section('title','User')

@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Data Table</h4>
                    <a class="btn btn-success px-5" href="{{ route('admin.users.create') }}">Add new user</a>

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>NAme</th>
                                        <th>Email</th>
                                        <th>Type</th>
                                        <th>Address </th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                           @foreach ($user as $user)
                           <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}t</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type }}</td>
                            <td>{{ $user->address }}</td>


                                <td>
                                    <a class="btn btn-primary" href="{{ route('admin.users.edit',$user->id) }}"><i class="fas fa-edit"></i></a>
                                    <form class="d-inline" action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure')"><i class="fas fa-trash"></i></button>
                                    </form>

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
    <!-- #/ container -->
</div>
<!--**********************************
    Content body end
***********************************-->

@stop
