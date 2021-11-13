<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Admin Login</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{ asset('assets/backend/assets/images/favicon.ico')}}">

        <link href="{{ asset('assets/backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body class="bg-primary">
        <div class="home-btn d-none d-sm-block">
            <a href="{{ route('admin.dashboard') }}" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern shadow-none">
                            <div class="card-body">
                                <div class="text-center mt-4">
                                    <div class="mb-3">
                                        <a href="index.html" class="logo"><img src="{{ asset('assets/backend/assets/images/logo-dark.png') }}" height="20" alt="logo"></a>
                                    </div>
                                </div>
                                <div class="p-3"> 
                                    <h4 class="font-18 text-center">DPG-E-Marketplace</h4>
                                    <p class="text-muted text-center mb-4">Sign in to continue to DPG-E-Marketplace.</p>
                                    <form class="form-horizontal" action="{{ route('admin.login') }}" method="POST">
                						@csrf
                                        <div class="form-group">
                                            <label for="username">E-mail</label>
                                            <input type="text" class="form-control" name="email" placeholder="Enter E-mail">
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                                        </div>
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                        </div>
            
                                        <div class="mt-4 text-center">
                                            <a href="pages-recoverpw.html"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                        </div>
                                    </form>
                
                                </div>
                    
                            </div>
                        </div>
                        <div class="mt-5 text-center text-white-50">
                            <p>Don't have an account ? <a href="pages-register.html" class="font-500 text-white"> Signup now </a> </p>
                            <p>© 2021 DPG-E-Marketplace. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>


<!-- Mirrored from themesbrand.com/veltrix/layouts-2/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 07:07:27 GMT -->
</html>