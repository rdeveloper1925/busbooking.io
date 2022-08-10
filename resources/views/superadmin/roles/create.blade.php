@extends('layouts.app')
@section('title',"JIS - Role Creation")
@section('page-title',"Role Creation")

@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Access Managment</a></li>
    <li class="breadcrumb-item"><a href="/role">Role Managment</a></li>
    <li class="breadcrumb-item active">Role Creation</li>
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
    <!--Roles-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="mt-0 header-title">Role Creation</h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/role" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="example-input1-group1">Role Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-users"></i></span>
                            </div>
                            <input type="text" value="{{old('name')}}" required name="name" class="form-control"
                                placeholder="Full Name"><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 my-2 control-label">Permissions</label>
                        <div class="col-md-10">
                            @foreach($permissions as $permission)
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" value="{{$permission->name}}"
                                        data-parsley-multiple="groups" name="permission[]">
                                    <label class="custom-control-label" for="customCheck3">{{$permission->name}}</label>
                                </div>
                            </div>
                            @endforeach
                            <div>
                                <small class="text-warning">If required permission is not present, please add it in the add permission area on this page</small>
                            </div>
                        </div>
                    </div>
                    <!--end row-->

                    <input type="submit" class="btn btn-lg btn-success" value="Save Role">
                    <!--end form-grop-->
                </form>
                <!--end form-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <!--Permissions-->
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="mt-0 header-title">Permission Creation</h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/permission" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="example-input1-group1">Permission Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-key"></i></span>
                            </div>
                            <input type="text"  required name="name" class="form-control" placeholder="Permission name"><br>
                        </div>
                        <div>
                            <small class="form-text text-muted">Maintain a constant format 'abcd-efgh' all spaces are
                                replaced
                                with -</small>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-lg btn-success" value="Save Permission">
                </form>
                <br/>
                <table id="user_table" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                
                    <tbody>
                        @foreach($permissions as $u)
                        <tr>
                            <td>{{$u->name}}</td>
                            @if(trim($u->name) != "sudo")
                            <td>
                                <form method="post" action="/permission/{{$u->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                
                    </tbody>
                </table>
                <!--end form-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
</div>
@endsection