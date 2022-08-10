@extends('layouts.app')
@section('title',"JIS - Dashboard")
@section('page-title',"Dashboard")

@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Dastyle</a></li>
    <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
    <li class="breadcrumb-item active">Starer</li>
</ol>
@endsection

@section('exporter')
<div class="col-auto align-self-center">
    <a href="#" class="btn btn-sm btn-outline-primary" id="Dash_Date">
        <span class="day-name" id="Day_Name">Today:</span>&nbsp;
        <span class="" id="Select_date">Jan 11</span>
        <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
    </a>
    <a href="#" class="btn btn-sm btn-outline-primary">
        <i data-feather="download" class="align-self-center icon-xs"></i>
    </a>
</div>
@endsection

@section('content')
<div class="row">
    @if(session()->has('success'))
    <div class="alert alert-success border-0 b-round" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="mdi mdi-close align-middle font-16"></i></span>
        </button>
        {{session()->get('success')}}
    </div>
    @endif
    <div class="col-12">
        <h4>wtf</h4>
    </div>
</div>
@endsection
@section("extra-js","h")