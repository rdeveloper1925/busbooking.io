@extends('layouts.app')
@section('title',"JIS - Policy Creation")
@section('page-title',"Policy Creation")

@section('extra-css')
<link href="/plugins/dropify/css/dropify.min.css" rel="stylesheet">
@endsection



@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Policy Management</a></li>
    <li class="breadcrumb-item active">Policy Onboarding</li>
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
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mt-0 header-title">Policy Onboarding</h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                    <form action="{{route('policy.store')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="row col-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-input1-group1">Full Name</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" id="example-input1-group1" required name="fullName" class="form-control"
                                          value="{{old('fullName')}}"  placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-input1-group1">Identification document number (NIN)</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                        </div>
                                        <input type="text" id="example-input1-group1" required name="idNo" class="form-control"
                                          value="{{old('idNo')}}"  placeholder="NIN Number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-input1-group1">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="text" id="example-input1-group1" required name="email" class="form-control"
                                          value="{{old('email')}}"  placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-input1-group1">Phone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input value="{{old('phone')}}" type="text" id="example-input1-group1" required name="phone" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-input1-group1">Policy Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-money"></i></span>
                                        </div>
                                        <input value="{{old('amount')}}" type="text" id="example-input1-group1" required name="amount" class="form-control" placeholder="Policy Amount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-input1-group1">Type of Insurance</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-clipboard"></i></span>
                                        </div>
                                        <select name="insuranceType" class="form-control">
                                            <option value="General Insurance">General Insurance</option>
                                            <option value="Health Insurance">Health Insurance</option>
                                            <option value="Motor Insurance">Motor Insurance</option>
                                            <option value="Other Insurance">Other Insurance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-input1-group1">Scanned Application Form</label>
                                    <div class="input-group">
                                        <input type="file" id="input-file-now" name="scannedApplication" class="dropify" />
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
                                            <option value="{{$i->id}}">{{$i->institutionName}} ({{ucwords($i->institutionType)}})
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                </div>
                            </div> 
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

    @section('extra-js')
    <script src="/plugins/dropify/js/dropify.min.js"></script>
    <script src="/assets/pages/jquery.form-upload.init.js"></script>
    @endsection