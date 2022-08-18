@extends('layouts.app')
@section('title',"Bus Booking - Bus Report")
@section('page-title',"Bus Report")
@section('extra-css')
<!-- DataTables -->
<link href="/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('breadcrumbs')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:void(0);">Reports</a></li>
    <li class="breadcrumb-item active">Bus Report</li>
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

                <h4 class="mt-0 header-title">Bus Report Summary</h4>
                {{-- <div class="row">
                    <div class="col-12 mb-4">
                        <a href="/user/create" class="btn btn-soft-primary waves-effect btn-lg waves-light">Create
                            User</a>
                    </div>
                </div> --}}
                <table id="user_table" class="table table-striped table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>Route</th>
                            <th>Bus Number</th>
                            <th>Seats Booked</th>
                            <th>Seat Rate</th>
                            <th>Amount Collected</th>
                            <th>Trinity Branch</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>NAIROBI &#8594 MOMBASA</td>
                            <td>UBA 785K</td>
                            <td>60/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Nairobi</td>
                        </tr>
                        <tr>
                            <td>KAMPALA &#8594 NAIROBI</td>
                            <td>UBA 234Y</td>
                            <td>54/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Kampala</td>
                        </tr>
                        <tr>
                            <td>KAMPALA &#8594 NAIROBI</td>
                            <td>UBA 234Y</td>
                            <td>54/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Kampala</td>
                        </tr>
                        <tr>
                            <td>KAMPALA &#8594 NAIROBI</td>
                            <td>UBA 234Y</td>
                            <td>54/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Kampala</td>
                        </tr>
                        <tr>
                            <td>KAMPALA &#8594 NAIROBI</td>
                            <td>UBA 234Y</td>
                            <td>54/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Kampala</td>
                        </tr>
                        <tr>
                            <td>KAMPALA &#8594 NAIROBI</td>
                            <td>UBA 234Y</td>
                            <td>54/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Kampala</td>
                        </tr>
                        <tr>
                            <td>KAMPALA &#8594 NAIROBI</td>
                            <td>UBA 234Y</td>
                            <td>54/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Kampala</td>
                        </tr>
                        <tr>
                            <td>KAMPALA &#8594 NAIROBI</td>
                            <td>UBA 234Y</td>
                            <td>54/63</td>
                            <td>UGX. 50000</td>
                            <td>UGX. 2700000</td>
                            <td>Trinity Kampala</td>
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
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/metismenu.min.js"></script>
<script src="/assets/js/waves.js"></script>
<script src="/assets/js/feather.min.js"></script>
<script src="/assets/js/simplebar.min.js"></script>
<script src="/assets/js/jquery-ui.min.js"></script>
<script src="/assets/js/moment.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Required datatable js -->
<script src="/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="/plugins/datatables/jszip.min.js"></script>
<script src="/plugins/datatables/pdfmake.min.js"></script>
<script src="/plugins/datatables/vfs_fonts.js"></script>
<script src="/plugins/datatables/buttons.html5.min.js"></script>
<script src="/plugins/datatables/buttons.print.min.js"></script>
<script src="/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="/assets/pages/jquery.datatable.init.js"></script>
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