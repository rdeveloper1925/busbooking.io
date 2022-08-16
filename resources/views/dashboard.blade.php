@extends('layouts.app')
@section('title',"Bus Booking - Dashboard")
@section('page-title',"Dashboard")

@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
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
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">New Tickets</p>
                                <h3 class="my-0">155</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <i data-feather="tag" class="align-self-center text-muted icon-md"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="text-center">
                            <h6 class="text-primary bg-soft-primary p-3 mb-0 font-11 rounded">
                                <i data-feather="calendar" class="align-self-center icon-xs mr-1"></i>
                                01 Jan 2020 to 31 Jun 2020
                            </h6>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Open Tickets</p>
                                <h3 class="my-0">101</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <i data-feather="package" class="align-self-center text-muted icon-md"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="text-center">
                            <h6 class="text-primary bg-soft-primary p-3 mb-0 font-11 rounded">
                                <i data-feather="calendar" class="align-self-center icon-xs mr-1"></i>
                                01 Jan 2020 to 31 Jun 2020
                            </h6>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">On Hold</p>
                                <h3 class="my-0">15</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <i data-feather="zap" class="align-self-center text-muted icon-md"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="text-center">
                            <h6 class="text-primary bg-soft-primary p-3 mb-0 font-11 rounded">
                                <i data-feather="calendar" class="align-self-center icon-xs mr-1"></i>
                                01 Jan 2020 to 31 Jun 2020
                            </h6>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
            <div class="col-md-6 col-lg-3">
                <div class="card report-card">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col">
                                <p class="text-dark mb-1 font-weight-semibold">Unassigned</p>
                                <h3 class="my-0">88</h3>
                            </div>
                            <div class="col-auto align-self-center">
                                <div class="report-main-icon bg-light-alt">
                                    <i data-feather="lock" class="align-self-center text-muted icon-md"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="hr-dashed">
                        <div class="text-center">
                            <h6 class="text-primary bg-soft-primary p-3 mb-0 font-11 rounded">
                                <i data-feather="calendar" class="align-self-center icon-xs mr-1"></i>
                                01 Jan 2020 to 31 Jun 2020
                            </h6>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div><!-- end col-->

    <div class="col-lg-9">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Tickets Status</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <div class="dropdown">
                            <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                This Year<i class="las la-angle-down ml-1"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Mont</a>
                                <a class="dropdown-item" href="#">This Year</a>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="">
                    <div id="Tickets_Status" class="apex-charts"></div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Customer Satisfaction</h4>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="happiness-score">
                    <h2 class="mb-0">94.5%</h2>
                    <p class="mb-0 text-uppercase">Happiness</p>
                </div>
                <div id="ana_device" class="apex-charts mb-2"></div>
                <ul class="list-inline mb-0 text-center">
                    <li class="list-inline-item mb-2 mb-lg-0 font-weight-semibold-alt">
                        <i class="far fa-grin-stars text-primary mr-2"></i>Excellent
                    </li>
                    <li class="list-inline-item mb-2 mb-lg-0 font-weight-semibold-alt">
                        <i class="far fa-smile mr-2 mb-lg-0" style="color: #fdb5c8;"></i>Very Good
                    </li>
                    <li class="list-inline-item mb-2 font-weight-semibold-alt">
                        <i class="far fa-meh text-info mr-2"></i>Good
                    </li>
                    <li class="list-inline-item font-weight-semibold-alt">
                        <i class="far fa-frown  mr-2" style="color: #c693ff;"></i>Fair
                    </li>
                </ul>
                <hr class="hr-dashed">
                <div class="media">
                    <div class="avatar-box thumb-sm align-self-center mr-2">
                        <span class="avatar-title bg-soft-primary rounded-circle">JR</span>
                    </div>
                    <div class="media-body align-self-center">
                        <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available...
                            <a href="#" class="text-primary">Read more</a>
                        </p>
                    </div>
                    <!--end media-body-->
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h4 class="card-title">Support Status</h4>
                    </div>
                    <!--end col-->
                    <div class="col-auto">
                        <a href="#" class="btn btn-sm btn-outline-light d-inline-block">View All</a>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col support-tickets">
                        <h4 class="font-weight-semibold">1530</h4>
                        <h5>Tickets</h5>
                    </div>
                    <!--end col-->
                    <div class="col-auto align-self-center">
                        <ul class="list-inline url-list mb-0">
                            <li class="list-inline-item mb-2">
                                <i class="fas fa-circle text-primary font-10"></i>
                                <span>Open Tickets</span>
                            </li>
                            <li class="list-inline-item mb-2">
                                <i class="fas fa-circle text-info font-10"></i>
                                <span>Resolved Tickets</span>
                            </li>
                            <li class="list-inline-item mb-3">
                                <i class="fas fa-circle text-success font-10"></i>
                                <span>Unresolved Tickets</span>
                            </li>
                        </ul>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
                <div class="progress mt-4">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar"
                        style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">25%</div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 5%" aria-valuenow="5"
                        aria-valuemin="0" aria-valuemax="100">5%</div>
                </div>
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="timer-data">
                            <div class="icon-info mt-1 mb-3">
                                <i class="dripicons-phone bg-soft-dark"></i>
                            </div>
                            <h3 class="mt-0 text-dark">0m:27s</h3>
                            <h4 class="mt-0 header-title text-truncate font-15 mb-0">Avg.Speed of answer</h4>
                            <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-5 align-self-center">
                        <div class="apexchart-wrapper">
                            <div id="dash_spark_1" class="chart-gutters"></div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <div class="timer-data">
                            <div class="icon-info mt-1 mb-3">
                                <i class="dripicons-clock bg-soft-dark"></i>
                            </div>
                            <h3 class="mt-0 text-dark">4m:30s</h3>
                            <h4 class="mt-0 header-title text-truncate font-15 mb-0">Time to Resolved Complaint</h4>
                            <p class="text-muted mb-0 text-truncate">It is a long established fact that a reader.</p>
                        </div>
                    </div>
                    <!--end col-->
                    <div class="col-5 align-self-center">
                        <div class="apexchart-wrapper">
                            <div id="dash_spark_2" class="chart-gutters"></div>
                        </div>
                    </div>
                    <!--end col-->
                </div>
                <!--end row-->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div>
    <!--end col-->

        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Activity</h4>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <div class="dropdown">
                                <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    All<i class="las la-angle-down ml-1"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Purchases</a>
                                    <a class="dropdown-item" href="#">Emails</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="help-activity-height" data-simplebar>
                        <div class="activity">
                            <div class="activity-info">
                                <div class="icon-info-activity">
                                    <i class="las la-user-clock bg-soft-primary"></i>
                                </div>
                                <div class="activity-info-text">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                            updated the status of <a href="">Refund #1234</a> to awaiting customer response
                                        </p>
                                        <small class="text-muted">10 Min ago</small>
                                    </div>
                                </div>
                            </div>
    
                            <div class="activity-info">
                                <div class="icon-info-activity">
                                    <i class="mdi mdi-timer-off bg-soft-primary"></i>
                                </div>
                                <div class="activity-info-text">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                            was added to the group, group name is <a href="">Overtake</a>
                                        </p>
                                        <small class="text-muted">50 Min ago</small>
                                    </div>
                                </div>
                            </div>
    
                            <div class="activity-info">
                                <div class="icon-info-activity">
                                    <img src="assets/images/users/user-5.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <div class="activity-info-text">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                            opened new showcase <a href="">Mannat #112233</a> with theme market
                                        </p>
                                        <small class="text-muted">10 hours ago</small>
                                    </div>
                                </div>
                            </div>
    
                            <div class="activity-info">
                                <div class="icon-info-activity">
                                    <i class="mdi mdi-clock-outline bg-soft-primary"></i>
                                </div>
                                <div class="activity-info-text">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted mb-0 font-13 w-75"><span>Donald</span>
                                            updated the status of <a href="">Refund #1234</a> to awaiting customer response
                                        </p>
                                        <small class="text-muted">Yesterday</small>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-info">
                                <div class="icon-info-activity">
                                    <i class="mdi mdi-alert-outline bg-soft-primary"></i>
                                </div>
                                <div class="activity-info-text">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted mb-0 font-13 w-75"><span>Lucy Peterson</span>
                                            was added to the group, group name is <a href="">Overtake</a>
                                        </p>
                                        <small class="text-muted">14 Nov 2019</small>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-info">
                                <div class="icon-info-activity">
                                    <img src="assets/images/users/user-4.jpg" alt="" class="rounded-circle thumb-md">
                                </div>
                                <div class="activity-info-text">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="text-muted mb-0 font-13 w-75"><span>Joseph Rust</span>
                                            opened new showcase <a href="">Mannat #112233</a> with theme market
                                        </p>
                                        <small class="text-muted">15 Nov 2019</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end activity-->
                    </div>
                    <!--end analytics-dash-activity-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h4 class="card-title">Agent Performance</h4>
                        </div>
                        <!--end col-->
                        <div class="col-auto">
                            <a href="#" class="btn btn-sm btn-outline-light d-inline-block">View All</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive browser_users">
                        <table class="table mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-top-0">Agent</th>
                                    <th class="border-top-0">Total Calls</th>
                                    <th class="border-top-0">Calls Answered</th>
                                    <th class="border-top-0">Avg.Speed of answer</th>
                                    <th class="border-top-0">Adherence %</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                                <!--end tr-->
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="media">
                                            <img src="assets/images/users/user-1.jpg" alt=""
                                                class="thumb-sm rounded-circle mr-2">
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="mt-0 mb-1 text-dark">Donald Gardner</h6>
                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </td>
                                    <td>38</td>
                                    <td>32</td>
                                    <td>3:12s</td>
                                    <td>80%</td>
                                    <td>
                                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                    </td>
                                </tr>
                                <!--end tr-->
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar-box thumb-sm align-self-center mr-2">
                                                <span class="avatar-title bg-soft-pink rounded-circle">NS</span>
                                            </div>
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="mt-0 mb-1 text-dark">Nicholas Smith</h6>
                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>45</td>
                                    <td>2:45s</td>
                                    <td>84%</td>
                                    <td>
                                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                    </td>
                                </tr>
                                <!--end tr-->
                                <tr>
                                    <td>
                                        <div class="media">
                                            <img src="assets/images/users/user-4.jpg" alt=""
                                                class="thumb-sm rounded-circle mr-2">
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="mt-0 mb-1 text-dark">Paula Anderson</h6>
                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </td>
                                    <td>32</td>
                                    <td>24</td>
                                    <td>4:15s</td>
                                    <td>73%</td>
                                    <td>
                                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                    </td>
                                </tr>
                                <!--end tr-->
    
                                <tr>
                                    <td>
                                        <div class="media">
                                            <img src="assets/images/users/user-3.jpg" alt=""
                                                class="thumb-sm rounded-circle mr-2">
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="mt-0 mb-1 text-dark">Lucy Peterson</h6>
                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </td>
                                    <td>25</td>
                                    <td>21</td>
                                    <td>5:42s</td>
                                    <td>93%</td>
                                    <td>
                                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                    </td>
                                </tr>
                                <!--end tr-->
                                <tr>
                                    <td>
                                        <div class="media">
                                            <div class="avatar-box thumb-sm align-self-center mr-2">
                                                <span class="avatar-title bg-soft-primary rounded-circle">JR</span>
                                            </div>
                                            <div class="media-body align-self-center text-truncate">
                                                <h6 class="mt-0 mb-1 text-dark">Joseph Rust</h6>
                                                <p class="text-muted mb-0">Dummy text of the printing.</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>45</td>
                                    <td>2:45s</td>
                                    <td>84%</td>
                                    <td>
                                        <a href="#" class="mr-2"><i class="las la-pen text-info font-18"></i></a>
                                        <a href="#"><i class="las la-trash-alt text-danger font-18"></i></a>
                                    </td>
                                </tr>
                                <!--end tr-->
                            </tbody>
                        </table>
                        <!--end table-->
                    </div>
                    <!--end /div-->
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
</div>
@endsection
@section("extra-js")
    <script src="/plugins/apex-charts/apexcharts.min.js"></script>
    <script src="/assets/pages/jquery.helpdesk-dashboard.init.js"></script>
@endsection