@extends('layouts.app')
@section('title',"Bus Booking - Branch Creation")
@section('page-title',"Branch Creation")

@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Access Managment</a></li>
    <li class="breadcrumb-item"><a href="/user">Branch Managment</a></li>
    <li class="breadcrumb-item active">Branch Creation</li>
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
                <h4 class="mt-0 header-title">Branch Creation</h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="{{route('branch.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="example-input1-group1">Branch Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-building"></i></span>
                            </div>
                            <input type="text" id="example-input1-group1" required name="branchName" class="form-control"
                                placeholder="Branch Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-input1-group1">Branch Location</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <input type="text" id="example-input1-group1" required name="branchLocation" class="form-control"
                                placeholder="Branch Location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="example-input1-group1">Contact Person</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" id="example-input1-group1" required name="contactPerson"
                                class="form-control" placeholder="Contact Person">
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

                    <div class="form-group mb-0">
                        <input type="submit" value="Add Branch" class="btn btn-md form-control btn-success">
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