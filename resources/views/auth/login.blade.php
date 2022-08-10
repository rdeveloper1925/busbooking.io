
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{env('APP_NAME')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Lock screen page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="#" class="logo logo-admin">
                                            <img src="assets/images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">{{env("APP_NAME")}}</h4>   
                                        <p class="text-muted  mb-0">Login to continue</p>  
                                    </div>
                                </div>
                                <div class="card-body">
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

                                    <form class="form-horizontal auth-form my-4" method="POST" action="{{route('dologin')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Email</label>
                                            <div class="input-group mb-3">                                                                                         
                                                <input type="text" class="form-control" name="email" value="{{old('email')}}"  id="email" placeholder="Enter valid email address">
                                            </div>                                    
                                        </div><!--end form-group--> 
                                        <div class="form-group">
                                            <label for="username">Password</label>
                                            <div class="input-group mb-3">                                                                                         
                                                <input type="password" class="form-control" name="password"  id="password" placeholder="Enter password">
                                            </div>                                    
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Login <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                    {{-- <p class="text-muted mb-0">Not you ? return  <a href="auth-register.html" class="text-primary ml-2">Sign In</a></p> --}}
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">JIS © 2022</span>                                            
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End lock screen page -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>

        
    </body>

</html>