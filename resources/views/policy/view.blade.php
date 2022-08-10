@extends('layouts.app')
@section('title',"JIS - Policy View/Approve")
@section('page-title',"Policy View/Approve")

@section('extra-css')
<link href="/plugins/dropify/css/dropify.min.css" rel="stylesheet">
@endsection



@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Policy Management</a></li>
    <li class="breadcrumb-item active">Policy View/Approve</li>
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
                <h4 class="mt-0 header-title">Policy View/Approve</h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="#" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="row col-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-input1-group1">Full Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                    </div>
                                    <input type="text" id="example-input1-group1" required name="fullName"
                                        class="form-control" disabled value="{{$policy->fullName}}"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Identification document number (NIN)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                    </div>
                                    <input type="text" id="example-input1-group1" required name="idNo"
                                        class="form-control" disabled value="{{$policy->idNo}}"
                                        placeholder="NIN Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="text" id="example-input1-group1" required name="email"
                                        class="form-control" disabled value="{{$policy->email}}" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Phone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input disabled value="{{$policy->phone}}" type="text" id="example-input1-group1"
                                        required name="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Policy Amount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-money"></i></span>
                                    </div>
                                    <input value="{{$policy->amount}}" type="text" id="example-input1-group1" required
                                        name="amount" class="form-control" placeholder="Policy Amount">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Type of Insurance</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-clipboard"></i></span>
                                    </div>
                                    <input type="text" name="insuranceType" disabled value="{{$policy->insuranceType}}"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Bank</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-house"></i></span>
                                    </div>
                                    <input type="text" name="insuranceType" disabled
                                        value="{{$policy->bank->institutionName}}" class="form-control">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Uploaded Application Form:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-download"></i></span>
                                    </div>
                                    <a class="btn btn-md btn-secondary" href="{{$mediaUrl}}">{{$fileName}}</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Institution (Bank/Insurer)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-industry"></i></span>
                                    </div>
                                    <input type="text" name="institution" disabled
                                        value="{{ucwords($policy->institution->institutionName)}}" class="form-control">

                                </div>
                            </div>
                        
                </form>
                <div class="form-group ">
                    <!--TODO: check if user is allowed to approve and if the policy is waiting for approval -->
                    <a href="{{route('policy.approve',$policy->id)}}" class="btn btn-md form-control btn-success">Approve Policy</a>
                </div>
                <div class="form-group ">
                    <!--TODO: check if user is allowed to approve and if the policy is waiting for approval -->
                    <a href="{{route('policy.edit',$policy->id)}}" class="btn btn-md form-control btn-warning"> Edit Policy</a>
                </div>
                <hr><h3><strong>OR</strong></h3>
                <hr>
                <form action="{{route('policy.rejectRemarks',$policy->id)}}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label for="">Remarks</label>
                        <textarea name="remarks" required id="" required cols="30" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Reject policy" class="btn btn-md form-control btn-danger">
                    </div>
                </form>
                </div>
            </div>
        </div>




        <!--end form-grop-->
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