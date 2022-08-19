@extends('layouts.app')
@section('title',"Bus Booking - Branch Management")
@section('page-title',"Branch Management")
@section('extra-css')
<!-- DataTables -->
<link href="/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Access Managment</a></li>
    <li class="breadcrumb-item active">Branch Management</li>
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
            <div class="card-body">

                <h4 class="mt-0 header-title">Branches</h4>
                <div class="row">
                    <div class="col-12 mb-4">
                        <a href="{{route('branch.create')}}" class="btn btn-soft-primary waves-effect btn-lg waves-light">Create
                            Branch</a>
                    </div>
                </div>
                <table id="user_table" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Contact Person</th>
                            <th>Phone Number</th>
                            <th>Number of system Users</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($branches as $u)
                        <tr>
                            <td>{{ucwords($u->branchName)}}</td>
                            <td>{{$u->branchLocation}}</td>
                            <td>
                                {{$u->contactPerson}}
                            </td>
                            <td>{{$u->phoneNumber}}</td>
                            <td>{{count($u->users)}}</td>
                            <td>
                                <a href="{{route('branch.show',$u->id)}}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{route('branch.edit',$u->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{route('branch.destroy',$u->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection

@section('extra-js')
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/metismenu.min.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/simplebar.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/moment.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>

<!-- Required datatable js -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="plugins/datatables/dataTables.buttons.min.js"></script>
<script src="plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="plugins/datatables/jszip.min.js"></script>
<script src="plugins/datatables/pdfmake.min.js"></script>
<script src="plugins/datatables/vfs_fonts.js"></script>
<script src="plugins/datatables/buttons.html5.min.js"></script>
<script src="plugins/datatables/buttons.print.min.js"></script>
<script src="plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="plugins/datatables/dataTables.responsive.min.js"></script>
<script src="plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="assets/pages/jquery.datatable.init.js"></script>
<script>
    $(document).ready(function () {
        
    var table = $('#user_table').DataTable({
        'responsive':true,
        dom: 'Bfrtip',
        buttons: [
        'colvis', 'excel', 'pdf'
    ]
    });

    table.buttons().container().appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
 
});
</script>
@endsection