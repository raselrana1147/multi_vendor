<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/veltrix/layouts-2/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 07:07:17 GMT -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>DPG Admin</title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="{{ asset('assets/backend/assets/images/favicon.ico')}}">

    
        <link href="{{ asset('assets/backend/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

        <link href="{{ asset('assets/backend/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">

        <link href="{{ asset('assets/backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span class="logo-light">
                            <img src="assets/images/logo-light.png" alt="" height="16">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                    </a>
                </div>

                <nav class="navbar-custom">
                    <ul class="navbar-right list-inline float-right mb-0">
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <form role="search" class="app-search">
                                <div class="form-group mb-0">
                                    <input type="text" class="form-control" placeholder="Search..">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </li>

                        <!-- language-->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us_flag.jpg" class="mr-2" height="12" alt=""/> English <span class="mdi mdi-chevron-down"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right language-switch">
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="16" /><span> German </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/italy_flag.jpg" alt="" height="16" /><span> Italian </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="16" /><span> French </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="16" /><span> Spanish </span></a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/russia_flag.jpg" alt="" height="16" /><span> Russian </span></a>
                            </div>
                        </li>

                        <!-- full screen -->
                        <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                            <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                <i class="ion ion-md-qr-scanner noti-icon"></i>
                            </a>
                        </li>

                        <!-- notification -->
                        <li class="dropdown notification-list list-inline-item">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ion ion-md-notifications noti-icon"></i>
                                <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                                <!-- item-->
                                <h6 class="dropdown-item-text">
                                    Notifications (258)
                                </h6>
                                <div class="slimscroll notification-item-list">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info"><i class="mdi mdi-glass-cocktail"></i></div>
                                        <p class="notify-details">Your item is shipped<span class="text-muted">It is a long established fact that a reader will</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
                                        <p class="notify-details">Your order is placed<span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
                                    </a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                        <p class="notify-details">New Message received<span class="text-muted">You have 87 unread messages</span></p>
                                    </a>
                                </div>
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-all">
                                    View all <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>

                        <li class="dropdown notification-list list-inline-item">
                                    <div class="dropdown notification-list nav-pro-img">
                                        <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                            <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                            <!-- item-->
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> Profile</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> My Wallet</a>
                                            <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i> Settings</a>
                                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> Lock screen</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="javascript:;" onclick="event.preventDefault();
          document.getElementById('logout-form-admin').submit();">
                                                <i class="mdi mdi-power text-danger"></i> Logout</a>

                                            
                                                  <form id="logout-form-admin" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                                      @csrf
                                                  </form>
                                        </div>
                                    </div>
                                </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Overview</li>
                            <li>
                                <a href="index.html" class="waves-effect">
                                    <i class="ion ion-md-speedometer"></i><span class="badge badge-success badge-pill float-right">2</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title">Apps</li>
                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-mail"></i><span> Email <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Email Read</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="ion ion-md-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect waves-light"><i class="ion ion-md-cart"></i><span> Ecommerce <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="ecommerce-products.html">Products</a></li>
                                    <li><a href="ecommerce-products-list.html">Products List</a></li>
                                    <li><a href="ecommerce-order-history.html">Order History</a></li>
                                    <li><a href="ecommerce-customers.html">Customers</a></li>
                                    <li><a href="ecommerce-product-edit.html">Product Edit</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="projects.html" class="waves-effect waves-light"><i class="ion ion-md-clipboard"></i><span> Projects </span></a>
                            </li>

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-wifi"></i><span> Authentication <span class="badge badge-pill badge-light float-right">New</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-login.html">Login One</a></li>
                                    <li><a href="pages-login-2.html">Login Two</a></li>
                                    <li><a href="pages-register.html">Register One</a></li>
                                    <li><a href="pages-register-2.html">Register Two</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password One</a></li>
                                    <li><a href="pages-recoverpw-2.html">Recover Password Two</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen One</a></li>
                                    <li><a href="pages-lock-screen-2.html">Lock Screen Two</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-copy"></i><span> Extra Pages <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="pages-blank.html">Blank Page</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-faq.html">Faq</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-paper-plane"></i><span> Email Templates <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="email-template-basic.html">Basic Action Email</a></li>
                                    <li><a href="email-template-alert.html">Alert Email</a></li>
                                    <li><a href="email-template-billing.html">Billing Email</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Layouts</li>

                            <li>
                                <a href="layout-light-sidebar.html" class="waves-effect">
                                    <i class="ion ion-md-options"></i><span> Light Sidebar </span>
                                </a>
                            </li>

                            <li>
                                <a href="layout-collapsed-sidebar.html" class="waves-effect">
                                    <i class="ion ion-md-switch"></i><span> Collapsed Sidebar </span>
                                </a>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-infinite"></i> <span> UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-general.html">General UI</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-paper"></i><span> Forms <span class="badge badge-pill badge-info float-right">8</span> </span></a>
                                <ul class="submenu">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-pulse"></i><span> Charts <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="charts-apex.html">Apex Chart</a></li>
                                    <li><a href="charts-echart.html">E - Chart</a></li>
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-list"></i><span> Tables <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-bonfire"></i> <span> Icons  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span> </a>
                                <ul class="submenu">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-pin"></i><span> Maps <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="ion ion-md-funnel"></i><span> Multi Level <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="javascript:void(0);"> Menu 1</a></li>
                                    <li>
                                        <a href="javascript:void(0);">Menu 2  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                                        <ul class="submenu">
                                            <li><a href="javascript:void(0);">Menu 2.1</a></li>
                                            <li><a href="javascript:void(0);">Menu 2.1</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content dasboard-content">
                    <div class="container-fluid">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="javascript:void(0);"><i class="mdi mdi-home-outline"></i></a></li> -->
                                        <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                                    </ol>
                                </div>
                                <div class="col-sm-6">
                                    <div class="float-right d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle arrow-none waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-settings mr-2"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end row -->
                        </div>
                        <!-- end page-title -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card mini-stat bg-pattern">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="dripicons-broadcast bg-soft-primary text-primary float-right h4"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-3 mt-0">Orders</h6>
                                        <h5 class="mb-3">1,687</h5>
                                        <p class="text-muted mb-0"><span class="text-success mr-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card mini-stat bg-pattern">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="dripicons-box bg-soft-primary text-primary float-right h4"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-3 mt-0">Revenue</h6>
                                        <h5 class="mb-3">$ 48,265</h5>
                                        <p class="text-muted mb-0"><span class="text-danger mr-2"> -26% <i class="mdi mdi-arrow-down"></i> </span> From previous period</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card mini-stat bg-pattern">
                                    <div class="card-body mini-stat-img">
                                        <div class="mini-stat-icon">
                                            <i class="dripicons-tags bg-soft-primary text-primary float-right h4"></i>
                                        </div>
                                        <h6 class="text-uppercase mb-3 mt-0">Average Price</h6>
                                        <h5 class="mb-3">$ 14.6</h5>
                                        <p class="text-muted mb-0"><span class="text-danger mr-2"> -26% <i class="mdi mdi-arrow-down"></i> </span> From previous period</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Weekly Sales</h4>

                                        <div id="area-chart" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Email Sent</h4>
                                        
                                        <div id="column-chart" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Earning</h4>

                                        <div>
                                            <div class="wid-earning">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <h5 class="mt-0">$1,452</h5>
                                                            <p class="text-muted mb-md-0">Weekly</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div id="chart1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wid-earning">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <h5 class="mt-0">$4,150</h5>
                                                            <p class="text-muted mb-md-0">Monthly</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div id="chart2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wid-earning">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div>
                                                            <h5 class="mt-0">$38,759</h5>
                                                            <p class="text-muted mb-md-0">Yearly</p>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div id="chart3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>

                            <div class="col-xl-4">
                                <div class="card messages ">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Recent Stock</h4>
                                        <nav>
                                            <div class="nav nav-tabs tab-wid recent-stock-widget nav-justified" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-comp-tab" data-toggle="tab" href="#nav-comp" role="tab" aria-controls="nav-comp" aria-selected="true">
                                                    <i class="dripicons-device-desktop h4 product-icon"></i>
                                                    <p class="text-muted mb-0">Computor</p>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-laptop-tab" data-toggle="tab" href="#nav-laptop" role="tab" aria-controls="nav-laptop" aria-selected="false">
                                                    <i class="dripicons-monitor h4 product-icon"></i>
                                                    <p class="text-muted mb-0">Laptop</p>
                                                </a>
                                            </div>
                                        </nav>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-comp" role="tabpanel" aria-labelledby="nav-comp-tab">
                                                <div class="text-center">
                                                    <div id="radial-chart"></div>
                                                    <h5 class="font-18">Computer</h5>
                                                    <p class="text-muted mb-0">Neque porro quisquam est</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-laptop" role="tabpanel" aria-labelledby="nav-laptop-tab">
                                                <div class="text-center">
                                                    <div id="radial-chart-2"></div>
                                                    <h5 class="font-18">Laptop</h5>
                                                    <p class="text-muted mb-0">Ut enim ad veniam quis</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Social Source</h4>
                                        <div id="multiple-radial-chart" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Latest Transactions</h4>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 60px;">
                                                            <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                                        </td>
                                                        <td>David Wiley
                                                            <p class="m-0 text-muted">On 02 Jun, 2019</p>
                                                        </td>
                                                        <td>Desktop</td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                        </td>
                                                        <td>
                                                            $2105
                                                            <p class="m-0 text-muted font-14">Amount</p>
                                                        </td>
                                                        
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                                        </td>

                                                        <td>Michael Gatlin
                                                            <p class="m-0 text-muted">On 03 Jun, 2019</p>
                                                        </td>
                                                        <td>laptop</td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> Payment expired
                                                        </td>
                                                        <td>
                                                            $1825
                                                            <p class="m-0 text-muted font-14">Amount</p>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                                        </td>
                                                        <td>Steve Dietrich
                                                            <p class="m-0 text-muted">On 05 Jun, 2019</p>
                                                        </td>
                                                        <td>Tablet</td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-warning mr-1"></i> Waiting payment
                                                        </td>
                                                        <td>
                                                            $1460
                                                            <p class="m-0 text-muted font-14">Amount</p>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                                        </td>
                                                        <td>James Harris
                                                            <p class="m-0 text-muted">On 07 Jun, 2019</p>
                                                        </td>
                                                        <td>Mobile</td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                        </td>
                                                        <td>
                                                            $1434
                                                            <p class="m-0 text-muted font-14">Amount</p>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle">
                                                        </td>
                                                        <td>Clay Johnson
                                                            <p class="m-0 text-muted">On 08 Jun, 2019</p>
                                                        </td>
                                                        <td>laptop</td>
                                                        <td>
                                                            <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                        </td>
                                                        <td>
                                                            $1759
                                                            <p class="m-0 text-muted font-14">Amount</p>
                                                        </td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xl-4">
                                <div class="card messages">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
                                        <nav>
                                            <div class="nav nav-tabs messages-tabs tab-wid nav-justified" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                                    <h5 class="mt-0 date">10</h5>
                                                    <p class="text-muted mb-0">June</p>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                                    <h5 class="mt-0 date">12</h5>
                                                    <p class="text-muted mb-0">June</p>
                                                </a>
                                            </div>
                                        </nav>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                                                <div class="p-2 mt-2">
                                                    <ul class="list-unstyled latest-message-list mb-0">
                                                        <li class="message-list-item">
                                                            <a href="#">
                                                                <div class="media">
                                                                    <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-2.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <p class="float-right font-12 text-muted">Just Now</p>
                                                                        <h6 class="mt-0">Mary Frye</h6>
                                                                        <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#">
                                                                <div class="media">
                                                                    <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-3.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <p class="float-right font-12 text-muted">11:42am</p>
                                                                        <h6 class="mt-0">David Smith</h6>
                                                                        <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" >
                                                                <div class="media">
                                                                    <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-4.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <p class="float-right font-12 text-muted">01:56pm</p>
                                                                        <h6 class="mt-0">Troy Long</h6>
                                                                        <p class="text-muted mb-0">This theme is awesome!</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                                                <div class="p-2 mt-2">
                                                    <ul class="list-unstyled latest-message-list mb-0">
                                                        <li class="message-list-item">
                                                            <a href="#">
                                                                <div class="media">
                                                                    <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-5.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <p class="float-right font-12 text-muted">09:42am</p>
                                                                        <h6 class="mt-0">John Carle</h6>
                                                                        <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#">
                                                                <div class="media">
                                                                    <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-6.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <p class="float-right font-12 text-muted">11:07am</p>
                                                                        <h6 class="mt-0">Jerry Carter</h6>
                                                                        <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#">
                                                                <div class="media">
                                                                    <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-7.jpg" alt="">
                                                                    <div class="media-body">
                                                                        <p class="float-right font-12 text-muted">01:17pm</p>
                                                                        <h6 class="mt-0">Shane Hill</h6>
                                                                        <p class="text-muted mb-0">This theme is awesome!</p>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="text-center">
                                                    <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end tab-content -->
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->
                        
                    </div>
                    <!-- container-fluid -->

                </div>
                <!-- content -->

                <footer class="footer">
                    © 2019 Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <div class="right-sidebar d-none d-xl-block">
            <div class="slimscroll-menu">
                <div class="px-4 pt-4">
                    <div class="card user-wid text-center overflow-hidden">
                        <div class="p-4 bg-lighten-danger"></div>
                        <div class="mx-3">
                            <div class="bg-white user-wid-content p-1 rounded">
                                <div class="user-img">
                                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="" class="rounded-circle thumb-md img-fluid">
                                </div>
                                <h5 class="font-14 mb-1"><a href="javascript: void(0);">James Heine</a> </h5>
                                <p class="text-muted mb-2"><small>Admin Head</small></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <h5 class="font-14">Calender</h5>

                        <div class="dashboard-date-pick" id="date-pick-widget" data-provide="datepicker-inline"></div>
                    </div>

                    <div>
                        <h5 class="font-14">Clients</h5>

                        <div id="world-map-markers" class="dashboard-map-wid"></div>
                    </div>

                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="{{ asset('assets/backend/assets/js/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/metismenu.min.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('assets/backend/assets/js/waves.min.js')}}"></script>

        <!-- datepicker -->
        <script src="{{ asset('assets/backend/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
        <!-- vector map  -->
        <script src="{{ asset('assets/backend/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{ asset('assets/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{ asset('assets/backend/plugins/apexcharts/apexcharts.min.js')}}"></script>

        <!-- Peity JS -->
        <script src="{{ asset('assets/backend/plugins/peity-chart/jquery.peity.min.js')}}"></script>

        <script src="{{ asset('assets/backend/assets/pages/dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/backend/assets/js/app.js')}}"></script>
        
    </body>


<!-- Mirrored from themesbrand.com/veltrix/layouts-2/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jan 2020 07:07:20 GMT -->
</html>