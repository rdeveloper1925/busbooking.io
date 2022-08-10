@extends('layouts.app')
@section('title',"JIS - Role Edit")
@section('page-title',"Role Edit")

@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Access Managment</a></li>
    <li class="breadcrumb-item"><a href="/role">Role Managment</a></li>
    <li class="breadcrumb-item active">Role Edit</li>
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
                <h4 class="mt-0 header-title">Role Edit</h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/role/{{$role->id}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="example-input1-group1">Role Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-users"></i></span>
                            </div>
                            <input type="text" value="{{$role->name}}" required name="name" class="form-control"
                                placeholder="Role Name"><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 my-2 control-label">Permissions</label>
                        <div class="col-md-10">
                            @foreach($permissions as $permission)
                            <div class="checkbox my-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" value="{{$permission->name}}"
                                        {{in_array($permission->id,$rolePermissions)?'checked':null}}
                                        data-parsley-multiple="groups" name="permission[]">
                                    <label class="custom-control-label" for="customCheck3">{{$permission->name}}</label>
                                </div>
                            </div>
                            @endforeach
                            <div>
                                <small>If required permission is not present, please add it in the add permission area
                                    on this page</small>
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
    
</div>
@endsection