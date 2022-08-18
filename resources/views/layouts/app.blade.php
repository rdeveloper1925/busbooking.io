
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield("title")</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="/assets/images/favicon.ico">
        @yield('extra-css')

        <!-- App css -->
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-layout="horizontal" class="">
        
       <!-- Top Bar Start -->
       <div class="topbar">  
            <!-- LOGO -->
            <div class="brand">
                <a href="#" class="logo">
                    <span>
                        <img src="/assets/images/favicon.ico" alt="logo-small" class="logo-sm"> <strong style="font-weight: bold;font-size:15px">Bus Booking</strong>
                    </span>
                </a>
            </div>
            <!--end logo-->  
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <span class="ml-1 nav-user-name hidden-sm">name here</span>
                            <img src="/assets/images/avatar.png" alt="profile-user" class="rounded-circle" />                                 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a>
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="{{route('startpwdchange')}}"><i data-feather="lock" class="align-self-center icon-xs icon-dual mr-1"></i>
                                Change Password</a>
                            <a class="dropdown-item" href="{{route('logout')}}"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                        </div>
                    </li>

                    <li class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle nav-link" id="mobileToggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a><!-- End mobile menu toggle-->
                    </li> <!--end menu item-->   
                </ul><!--end topbar-nav-->

                <div class="navbar-custom-menu">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <!--start dashboard -->
                            <li class="has-submenu">
                                <a href="{{route('user.index')}}">
                                    <span><i data-feather="user" class="align-self-center hori-menu-icon"></i>User Management</span>
                                </a>                               
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('driver.index')}}">
                                    <span><i data-feather="disc" class="align-self-center hori-menu-icon"></i>Driver Management</span>
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('bus.index')}}">
                                    <span><i data-feather="truck" class="align-self-center hori-menu-icon"></i>Bus Management</span>
                                </a>
                            </li>
                            <li class="has-submenu">
                                <a href="{{route('route.index')}}">
                                    <span><i data-feather="shuffle" class="align-self-center hori-menu-icon"></i>Route Management</span>
                                </a>
                            </li>
                            <!--end dashboard-->

                            <!--start usermgt (only sudo)-->
                            {{-- @can('can sudo')
                            <li class="has-submenu">
                                <a href="#">
                                    <span><i data-feather="key" class="align-self-center hori-menu-icon"></i>Access Management</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="/user"><i data-feather="users" class="mr-2" style="width: 15px"></i>User Management</a></li>
                                    <li><a href="/role"><i data-feather="key" class="mr-2" style="width: 15px"></i>Roles Management</a></li>
                                    <li><a href="/institution"><i data-feather="bold" class="mr-2" style="width: 15px"></i>Institution Management</a></li>
                                    <li><a href="/insurer"><i data-feather="home" class="mr-2" style="width: 15px"></i>Insurer Management</a></li>
                                </ul>
                            </li>
                            @endcan --}}
                            <!--end usermgt-->

                            <!--bank policy input (only bank)-->
                            {{-- @if(Auth::user()->hasrole('bank-checker') || Auth::user()->hasrole('bank-maker') || Auth::user()->can('can sudo'))
                            <li class="has-submenu">
                                <a href="#">
                                    <span><i data-feather="clipboard" class="align-self-center hori-menu-icon"></i>Policy Application</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="{{route('policy.index')}}"><i data-feather="clipboard" class="mr-2" style="width: 15px"></i>View Policies</a>
                                    </li>
                                    @can('bank-make-policy')
                                    <li><a href="/policy/create"><i data-feather="clipboard" class="mr-2" style="width: 15px"></i>New Policy Application</a></li>
                                    @endcan
                                    @can('bank-approve-policy')
                                    <li><a href="/policy/approve"><i data-feather="check" class="mr-2" style="width: 15px"></i>Approve Policy Application</a></li>
                                    @endcan
                                    <li><a href="/policy/track"><i data-feather="map-pin" class="mr-2" style="width: 15px"></i>Track Policy Application</a></li>
                                </ul>
                            </li>
                            @endif --}}
                            <!--end usermgt-->
{{-- 
                            <li class="has-submenu">
                                <a href="#">
                                    <span><i data-feather="home" class="align-self-center hori-menu-icon"></i>Dashboard</span>
                                </a>
                                <ul class="submenu">
                                    <li><a href="index.html"><i class="ti ti-minus"></i>Analytics</a></li>
                                    <li><a href="crm-index.html"><i class="ti ti-minus"></i>CRM</a></li>
                                    <li><a href="helpdesk-index.html"><i class="ti ti-minus"></i>Helpdesk</a></li>
                                    <li><a href="sales-index.html"><i class="ti ti-minus"></i>Sales</a></li> 
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->
    
                            <li class="has-submenu">
                                <a href="#">
                                    <span><i data-feather="box" class="align-self-center hori-menu-icon"></i>UI Kit</span>
                                </a>
                                <ul class="submenu">                                    
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>UI Elements</a>
                                        <ul class="submenu megamenu">
                                            <li>
                                                <ul>
                                                    <li><a href="ui-alerts.html"><i class="ti ti-minus"></i>Alerts</a></li>                                    
                                                    <li><a href="ui-avatar.html"><i class="ti ti-minus"></i>Avatar</a></li>
                                                    <li><a href="ui-buttons.html"><i class="ti ti-minus"></i>Buttons</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><a href="ui-dropdowns.html"><i class="ti ti-minus"></i>Dropdowns</a></li>
                                                    <li><a href="ui-grids.html"><i class="ti ti-minus"></i>Grids</a></li> 
                                                    <li><a href="ui-images.html"><i class="ti ti-minus"></i>Images</a></li>
                                                    <li><a href="ui-list.html"><i class="ti ti-minus"></i>List</a></li> 
                                                </ul>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li><a href="ui-paginations.html"><i class="ti ti-minus"></i>Paginations</a></li>   
                                                    <li><a href="ui-popover-tooltips.html"><i class="ti ti-minus"></i>Popover & Tooltips</a></li>                                
                                                    <li><a href="ui-progress.html"><i class="ti ti-minus"></i>Progress</a></li>
                                                    <li><a href="ui-spinners.html"><i class="ti ti-minus"></i>Spinners</a></li>
                                                </ul>
                                            </li>                                            
                                        </ul>                                        
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Advanced UI</a>
                                        <ul class="submenu">
                                            <li><a href="advanced-animation.html"><i class="ti ti-minus"></i>Animation</a></li>
                                            <li><a href="advanced-clipboard.html"><i class="ti ti-minus"></i>Clip Board</a></li>
                                            <li><a href="advanced-highlight.html"><i class="ti ti-minus"></i>Highlight</a></li>
                                            <li><a href="advanced-idle-timer.html"><i class="ti ti-minus"></i>Idle Timer</a></li>
                                            <li><a href="advanced-kanban.html"><i class="ti ti-minus"></i>Kanban</a></li>  
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Forms</a>
                                        <ul class="submenu">
                                            <li><a href="forms-advanced.html"><i class="ti ti-minus"></i>Advance Elements</a></li>
                                            <li><a href="forms-elements.html"><i class="ti ti-minus"></i>Basic Elements</a></li>
                                            <li><a href="forms-editors.html"><i class="ti ti-minus"></i>Editors</a></li>
                                        </ul>
                                    </li> <!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Charts</a>
                                        <ul class="submenu">
                                            <li><a href="charts-apex.html"><i class="ti ti-minus"></i>Apex</a></li>
                                            <li><a href="charts-chartjs.html"><i class="ti ti-minus"></i>Chartjs</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->                                    
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Tables </a>
                                        <ul class="submenu">
                                            <li><a href="tables-basic.html"><i class="ti ti-minus"></i>Basic</a></li>
                                            <li><a href="tables-datatable.html"><i class="ti ti-minus"></i>Datatables</a></li>
                                            <li><a href="tables-editable.html"><i class="ti ti-minus"></i>Editable</a></li>
                                        </ul>
                                    </li><!--end has-submenu-->
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Icons</a>
                                        <ul class="submenu">
                                            <li><a href="icons-dripicons.html"><i class="ti ti-minus"></i>Dripicons</a></li>
                                            <li><a href="icons-feather.html"><i class="ti ti-minus"></i>Feather</a></li>
                                        </ul>
                                    </li> <!--end has-submenu-->                                   
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Maps</a>
                                        <ul class="submenu">
                                            <li><a href="maps-google.html"><i class="ti ti-minus"></i>Google Maps</a></li>
                                            <li><a href="maps-leaflet.html"><i class="ti ti-minus"></i>Leaflet Maps</a></li>
                                            <li><a href="maps-vector.html"><i class="ti ti-minus"></i>Vector Maps</a></li> 
                                        </ul>
                                    </li> <!--end has-submenu-->   
                                    <li class="has-submenu">
                                        <a href="#"><i class="ti ti-minus"></i>Email Template</a>
                                        <ul class="submenu">
                                            <li><a href="email-templates-alert.html"><i class="ti ti-minus"></i>Alert Email</a></li>
                                            <li><a href="email-templates-basic.html"><i class="ti ti-minus"></i>Basic Action Email</a></li>                                    
                                            <li><a href="email-templates-billing.html"><i class="ti ti-minus"></i>Billing Email</a></li>
                                        </ul>
                                    </li> <!--end has-submenu-->                     
                                </ul><!--end submenu-->
                            </li><!--end has-submenu-->
    
                            <li class="has-submenu">
                                <a href="widgets.html">
                                    <span><i data-feather="layers" class="align-self-center hori-menu-icon"></i>Widgets</span>
                                </a>                               
                            </li><!--end has-submenu--> --}}
                        </ul><!-- End navigation menu -->
                    </div> <!-- end navigation -->
                </div>
                <!-- Navbar -->
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <div class="page-wrapper pl-4 pr-4 w-100 mb-3">
            <!-- Page Content-->
            <div class=" w-100 pl-0 pr-0">
                <div class=" pl-0 pr-0" >
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="page-title">@yield('page-title')</h4>
                                        @yield('breadcrumbs')
                                    </div><!--end col-->
                                    @yield('exporter')
                                    <!--end col-->  
                                </div><!--end row-->                                                              
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->
                    
                    @yield("content")

                </div><!-- container -->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
        {{-- <footer class="footer text-center text-sm-left mt-5">
            <div class="boxed-footer">© 2022 JIS 
                <span class="text-muted d-none d-sm-inline-block float-right">Crafted by Alcore tech</span>
            </div>
        </footer> --}}

        


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

        <!-- App js -->
        <script src="/assets/js/app.js"></script>
        @yield("extra-js")
        
    </body>

</html>