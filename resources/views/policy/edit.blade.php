@extends('layouts.app')
@section('title',"JIS - Policy Edit")
@section('page-title',"Policy Edit")

@section('extra-css')
<link href="/plugins/dropify/css/dropify.min.css" rel="stylesheet">
@endsection



@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Policy Management</a></li>
    <li class="breadcrumb-item active">Policy Edit</li>
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
                <h4 class="mt-0 header-title">Policy Editing for {{ucwords($policy->fullName)}}</h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="{{route('policy.update',$policy->id)}}" enctype="multipart/form-data" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row col-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-input1-group1">Identification document number (NIN)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-id-card"></i></span>
                                    </div>
                                    <input type="text" id="example-input1-group1" required name="idNo"
                                        class="form-control" value="{{$policy->idNo}}" placeholder="NIN Number">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    </div>
                                    <input type="text" id="example-input1-group1" required name="email"
                                        class="form-control" value="{{$policy->email}}" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Phone</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <input value="{{$policy->phone}}" type="text" id="example-input1-group1" required
                                        name="phone" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Policy Amount</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-dollar" aria-hidden="true"></i></span>
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
                                    <select name="insuranceType" class="form-control">
                                        <option value="General Insurance" {{$policy->insuranceType=='General Insurance'?'selected':''}}>General Insurance</option>
                                        <option value="Health Insurance" {{$policy->insuranceType=='Health Insurance'?'selected':''}}>Health Insurance</option>
                                        <option value="Motor Insurance" {{$policy->insuranceType=='Motor Insurance'?'selected':''}}>Motor Insurance</option>
                                        <option value="Other Insurance" {{$policy->insuranceType=='Other Insurance'?'selected':''}}>Other Insurance</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Uploaded Application Form:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-download"></i></span>
                                    </div>
                                    <a class="btn btn-md btn-secondary" href="{{$mediaUrl}}">{{$mediaFileName}}</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Scanned Application Form</label>
                                <div class="input-group">
                                    <input type="file" id="input-file-now" name="scannedApplication" class="dropify" />
                                </div>
                                <small class="text-warning">If no file is uploaded, system will take existing file as application form</small>
                            </div>
                            <div class="form-group">
                                <label for="example-input1-group1">Institution (Bank/Insurer)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-industry"></i></span>
                                    </div>
                                    <select name="institutionId" class="form-control" required>
                                        @foreach($institutions as $i)
                                        <option value="{{$i->id}}" {{$policy->institutionId==$i->id?'selected':''}}>{{$i->institutionName}}
                                            ({{ucwords($i->institutionType)}})
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>






            <div class="form-group col-6 mb-0">
                <input type="submit" value="Save Changes" class="btn btn-md form-control btn-success">
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