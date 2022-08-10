@extends('layouts.app')
@section('title',"JIS - User Creation")
@section('page-title',"User Creation")

@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Access Managment</a></li>
    <li class="breadcrumb-item"><a href="/user">User Managment</a></li>
    <li class="breadcrumb-item active">User Creation</li>
</ol>
@endsection

@section('content')
<div class="row">
<div class="col-12">
    @if($errors->any())
    @foreach($errors->all() as $e)
    <div class="alert alert-danger border-0 b-round" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="mdi mdi-close align-middle font-16"></i></span>
        </button>
        {{$e}}
    </div>
    @endforeach
    @endif
    @if(session()->has('success'))
    <div class="alert alert-success border-0 b-round" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="mdi mdi-close align-middle font-16"></i></span>
        </button>
        {{session()->get('success')}}
    </div>
    @endif
</div>
<div class="col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="mt-0 header-title">User Creation</h4>
        </div>
        <!--end card-header-->
        <div class="card-body">
            <form action="/user" method="post">
                @csrf
                <div class="form-group">
                    <label for="example-input1-group1">Full Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                        <input type="text" id="example-input1-group1" required name="name" class="form-control"
                            placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-input1-group1">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-envelope"></i></span>
                        </div>
                        <input type="text" id="example-input1-group1" required name="email" class="form-control"
                            placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-input1-group1">Phone Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                        <input type="text" id="example-input1-group1" required name="phoneNumber" class="form-control"
                            placeholder="Phone Number">
                    </div>
                </div>

                <div class="form-group">
                    <label for="example-input1-group1">Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                        </div>
                        <input type="text" id="example-input1-group1" required name="address" class="form-control"
                            placeholder="Address">
                    </div>
                </div>

                <div class="form-group">
                    <label for="example-input1-group1">Institution (Bank/Insurer)</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-industry"></i></span>
                        </div>
                        <select name="institutionId" class="form-control" required>
                            @foreach($institutions as $i)
                                <option value="{{$i->id}}">{{$i->institutionName}} ({{ucwords($i->institutionType)}})</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="example-input1-group1">Role</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-key"></i></span>
                        </div>
                        <select name="role" class="form-control" required>
                            @foreach($roles as $i)
                            <option value="{{$i->name}}">{{$i->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <small class="text-warning">If the role required isn't present, add it <a href="{{route('role.create')}}">here</a></small>
                </div>

                <div class="form-group mb-0">
                    <input type="submit" value="Add user" class="btn btn-md form-control btn-success">
                </div>
                <!--end form-grop-->
            </form>
            <!--end form-->
        </div>
        <!--end card-body-->
    </div>
    <!--end card-->
</div>
<!--end col-->
@endsection