@extends('layouts.app')
@section('title',"JIS - User Management")
@section('page-title',"User Management")
@section('extra-css')
<!-- DataTables -->
        <link href="plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
@endsection
@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Access Managment</a></li>
    <li class="breadcrumb-item active">User Management</li>
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
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Child rows example</h4>
                <p class="text-muted mb-3">The DataTables API has a number of methods for attaching
                    child rows to a parent row in the DataTable. This can be used to show additional
                    information about a row, useful for cases where you wish to convey more information
                    about a row than there is space for in the host table.
                </p>

                <table id="child_rowse" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr role="row" class="odd">
                            <td class=" details-control" tabindex="0"></td>
                            <td class="sorting_1">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>$86,000</td>
                            
                        </tr>
                        <tr role="row" class="even">
                            <td class=" details-control" tabindex="0"></td>
                            <td class="sorting_1">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>$86,000</td>
                        </tr>
                        <tr role="row" class="odd">
                            <td class=" details-control" tabindex="0"></td>
                            <td class="sorting_1">Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Salary</th>
                        </tr>
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
        function format(d) {
    // `d` is the original data object for the row
    return (
        '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">' +
        '<tr>' +
        '<td>sdfdfsdfsdfdf:</td>' +
        '<td>' +
        d.name +
        '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Extension number:</td>' +
        '<td>' +
        d.extn +
        '</td>' +
        '</tr>' +
        '<tr>' +
        '<td>Extra info:</td>' +
        '<td>And any further details here (images etc)...</td>' +
        '</tr>' +
        '</table>'
    );
}
    var table = $('#child_rowse').DataTable({
        columns: [
            {
                className: 'details-control',
                orderable: false,
                data: null,
                defaultContent: '',
            },
            { data: 'name' },
            { data: 'position' },
            { data: 'office' },
            { data: 'salary' },
        ],
        order: [[1, 'asc']],
    });
 
    // Add event listener for opening and closing details
    $('#child_rowse tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row(tr);
 
        if (row.child.isShown()) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        } else {
            // Open this row
            row.child(format(row.data())).show();
            tr.addClass('shown');
        }
    });
});
</script>
@endsection