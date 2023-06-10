@extends('admin.master')

@section('title','create_USer')

@section('content')
<!--**********************************
    Content body start
***********************************-->
<div class="content-body">

    <h1>Edit Category</h1>
    @include('admin.errors')
    <form action="{{ route('admin.users.update',$user->id) }}"
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="mb-3"> 
        <label >name</label>
        <input type="text"name="name"
         placeholder=" Name"class="form-control"
         value="{{ $user->name }}">
    </div>
    <div class="mb-3"> 
        <label >email</label>
        <input type="email"name="email"
         placeholder="Email"class="form-control"
         value="{{ $user->email }}">
    </div>
    <div class="mb-3"> 
        <label >Address</label>
        <input type="text"name="address"
         placeholder="address"class="form-control"
         value="{{ $user->address }}">
    </div>


    <button class="btn btn-success px-5">Update Category</button>




    </form>

</div>
<!--**********************************
    Content body end
***********************************-->


@stop