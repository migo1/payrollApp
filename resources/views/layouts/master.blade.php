<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pages.revox.io/dashboard/latest/html/condensed/builder.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 12:08:48 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Blank Page</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="Meet pages - The simplest and fastest way to build web UI for your dashboard or app."
        name="description" />
    <meta content="Ace" name="author" />
    <link href={{ asset('assets/plugins/pace/pace-theme-flash.css') }} rel="stylesheet" type="text/css" />
    <link href={{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }} rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href={{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }} rel="stylesheet" type="text/css"
        media="screen" />
    <link href={{ asset('assets/plugins/select2/css/select2.min.css') }} rel="stylesheet" type="text/css"
        media="screen" />
    <link class="main-stylesheet" href={{ asset('pages/css/pages.css') }} rel="stylesheet" type="text/css" />
    <!-- Please remove the file below for production: Contains demo classes -->
    <link class="main-stylesheet" href={{ asset('assets/css/style.css') }} rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        window.onload = function() {
            // fix for windows 8
            if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML +=
                '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
    </script>
</head>

<body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
        <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
        <div class="sidebar-overlay-slide from-top" id="appMenu">
            <div class="row">
                <div class="col-xs-6 no-padding">
                    <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
                    </a>
                </div>
                <div class="col-xs-6 no-padding">
                    <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 m-t-20 no-padding">
                    <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
                    </a>
                </div>
                <div class="col-xs-6 m-t-20 no-padding">
                    <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
                    </a>
                </div>
            </div>
        </div>
        <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
        <!-- BEGIN SIDEBAR MENU HEADER-->
        <div class="sidebar-header">
            <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png"
                data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
            <div class="sidebar-header-controls">
                <button aria-label="Toggle Drawer" type="button"
                    class="btn btn-icon-link invert sidebar-slide-toggle m-l-20 m-r-10" data-pages-toggle="#appMenu">
                    <i class="pg-icon">chevron_down</i>
                </button>
                <button aria-label="Pin Menu" type="button"
                    class="btn btn-icon-link invert d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none"
                    data-toggle-pin="sidebar">
                    <i class="pg-icon"></i>
                </button>
            </div>
        </div>
        <!-- END SIDEBAR MENU HEADER-->
        <!-- START SIDEBAR MENU -->
        @include('layouts.extra.sidebar')
        <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <div class="page-container ">
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE SIDEBAR TOGGLE -->
            <a href="#" class="btn-link toggle-sidebar d-lg-none pg-icon btn-icon-link" data-toggle="sidebar">
                menu</a>
            <!-- END MOBILE SIDEBAR TOGGLE -->
            <div class="">
                <div class="brand inline   ">
                    <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png"
                        data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                </div>
                <!-- START NOTIFICATION LIST -->
                <ul
                    class="d-lg-inline-block d-none notification-list no-margin d-lg-inline-block b-grey b-l b-r no-style p-l-20 p-r-20">
                    @include('layouts.extra.notifications')


                </ul>
                <!-- END NOTIFICATIONS LIST -->
                <a href="#" class="search-link d-lg-inline-block d-none" data-toggle="search"><i
                        class="pg-icon">search</i>Type anything to <span class="bold">search</span></a>
            </div>
            <div class="d-flex align-items-center">
                <!-- START User Info-->
                <div class="dropdown pull-right d-lg-block d-none">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" aria-label="profile dropdown">
                        <span class="thumbnail-wrapper d32 circular inline">
                            <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg"
                                data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                        <a href="#" class="dropdown-item"><span>Signed in as
                                <br /><b>{{ auth()->user()->name }}</b></span></a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Your Profile</a>
                        <a href="#" class="dropdown-item">Your Activity</a>
                        <a href="#" class="dropdown-item">Your Archive</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">Features</a>
                        <a href="#" class="dropdown-item">Help</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-item fs-12 hint-text">Last edited by David<br />on Friday at 5:27PM</span>
                    </div>
                </div>
                <!-- END User Info-->

            </div>
        </div>
        <!-- START PAGE-CONTAINER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper content-builder active full-height" id="plainContent">
            <!-- START PAGE CONTENT -->
            <div class="content">
                <!-- START PAGE COVER -->
                <div class=" container-fluid   container-fixed-lg">
                    <ul class="breadcrumb p-l-0">
                        <li class="breadcrumb-item"><a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Plain template
                        </li>
                    </ul>
                    <!-- END BREADCRUMB -->
                    <h3 class="page-title">Page Title</h3>
                </div>
                <div class=" container-fluid   container-fixed-lg">
                    <!-- YOU CAN REMOVE .container-fixed-lg TO DISABLE THE FEATURE WHERE THE CONTENT
                 ALIGNS TO THE CENTER WITHOUT STRECTHING UNGLY ON 1800PX(1080P & 4/5K MONITORS) UP WORDS SCREEN
                  -->
                    <!-- CONTENT GOES HERE-->
                    @yield('content')
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <!-- START CONTAINER FLUID -->
            <div class=" container-fluid   container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2014 </span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved. </span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#"
                                class="m-l-10">Privacy Policy</a></span>
                    </p>
                    {{-- <p class="small no-margin pull-right sm-pull-reset">
              <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
            </p> --}}
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->

        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper content-builder full-height" id="fullheightParallax">
            <!-- START PAGE CONTENT -->
            <div class="content full-height">
                <!-- START JUMBOTRON -->
                <div class="jumbotron full-height no-padding" data-pages="parallax">
                    <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0 full-height">
                        <div class="inner full-height d-flex align-items-center">
                            <div class="row justify-content-center full-width">
                                <div class="col-md-6 text-center">
                                    <h2 class="text-center">
                                        <img src="assets/img/logo.png" alt="logo">
                                        makes it super-easy to create your
                                        dashboard Without a designer.
                                    </h2>
                                    <button aria-label="" class="btn btn-success btn-rounded">Live Preview</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <div class=" container-fluid   container-fixed-lg demo-container">
                    <!-- PLEASE REMOVE THE HEIGHT STYLE FROM THIS DIV, ITS ONLY FOR DEMO PUPPOSE
                        TO SHOW THE PARRALAX EFFECT
                      -->
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
        <!-- END PAGE CONTENT WRAPPER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper content-builder full-height" id="titleParallax">
            <!-- START PAGE CONTENT -->
            <div class="content">
                <!-- START JUMBOTRON -->
                <div class="jumbotron  no-margin" data-pages="parallax">
                    <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
                        <div class="inner">
                            <h3 class="">Page Title</h3>
                        </div>
                    </div>
                </div>
                <!-- END JUMBOTRON -->
                <div class=" container-fluid   container-fixed-lg demo-container">
                    <!-- START BREADCRUMB -->
                    <ul class="breadcrumb p-l-0">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Parallax for page title
                        </li>
                    </ul>
                    <!-- END BREADCRUMB -->
                    <!-- PLEASE REMOVE demo-container CLASS ABOVE, ITS ONLY FOR DEMO PUPPOSE
                    TO SHOW THE PARRALAX EFFECT
                  -->
                </div>
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper content-builder full-height" id="columns-3-9">
            <!-- START PAGE CONTENT -->
            <div class="content full-height">
                <div class="container-fluid full-height no-padding">
                    <div class="row full-height no-margin">
                        <div class="col-md-3 no-padding b-r b-grey sm-b-b full-height">
                            <div class="bg-white full-height">
                                <!-- YOU CAN REMOVE FULL-HEIGHT IN ALL PARENT ELEMENTS TO EXPEND TO CONTENT HEIGHT
                           YOU CAN ALSO CHANGE THE BACKGROUN COLOR BY ADDING THE BG CLASSES
                           EXAMPLE : bg-success
                         -->
                            </div>
                        </div>
                        <div class="col-md-9 no-padding full-height">
                            <div class="placeholder full-height">
                                <!-- YOU CAN REMOVE FULL-HEIGHT IN ALL PARENT ELEMENTS TO EXPEND TO CONTENT HEIGHT
                           YOU CAN ALSO CHANGE THE BACKGROUN COLOR BY ADDING THE BG CLASSES
                           EXAMPLE : bg-success
                         -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <!-- START CONTAINER FLUID -->
            <div class=" container-fluid   container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2014 </span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved. </span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#"
                                class="m-l-10">Privacy Policy</a></span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                        <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper content-builder full-height" id="columns-9-3">
            <!-- START PAGE CONTENT -->
            <div class="content full-height">
                <div class="container-fluid full-height no-padding">
                    <div class="row full-height no-margin">
                        <div class="col-md-9 no-padding b-r b-grey full-height">
                            <div class="full-height placeholder">
                                <!-- YOU CAN REMOVE FULL-HEIGHT IN ALL PARENT ELEMENTS TO EXPEND TO CONTENT HEIGHT
                               YOU CAN ALSO CHANGE THE BACKGROUN COLOR BY ADDING THE BG CLASSES
                               EXAMPLE : bg-success
                             -->
                            </div>
                        </div>
                        <div class="col-md-3 no-padding full-height">
                            <div class="bg-white  full-height">
                                <!-- YOU CAN REMOVE FULL-HEIGHT IN ALL PARENT ELEMENTS TO EXPEND TO CONTENT HEIGHT
                               YOU CAN ALSO CHANGE THE BACKGROUN COLOR BY ADDING THE BG CLASSES
                               EXAMPLE : bg-success
                             -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <!-- START CONTAINER FLUID -->
            <div class=" container-fluid   container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2014 </span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved. </span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#"
                                class="m-l-10">Privacy Policy</a></span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                        <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper content-builder full-height" id="columns-6-6">
            <!-- START PAGE CONTENT -->
            <div class="content full-height">
                <div class="container-fluid full-height no-padding">
                    <div class="row full-height no-margin">
                        <div class="col-md-6 no-padding b-r b-grey full-height">
                            <div class="bg-white full-height">
                                <!-- YOU CAN REMOVE FULL-HEIGHT IN ALL PARENT ELEMENTS TO EXPEND TO CONTENT HEIGHT
                           YOU CAN ALSO CHANGE THE BACKGROUN COLOR BY ADDING THE BG CLASSES
                           EXAMPLE : bg-success
                         -->
                            </div>
                        </div>
                        <div class="col-md-6 no-padding full-height">
                            <div class="bg-white full-height">
                                <!-- YOU CAN REMOVE FULL-HEIGHT IN ALL PARENT ELEMENTS TO EXPEND TO CONTENT HEIGHT
                           YOU CAN ALSO CHANGE THE BACKGROUN COLOR BY ADDING THE BG CLASSES
                           EXAMPLE : bg-success
                         -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            <!-- START COPYRIGHT -->
            <!-- START CONTAINER FLUID -->
            <div class=" container-fluid   container-fixed-lg footer">
                <div class="copyright sm-text-center">
                    <p class="small no-margin pull-left sm-pull-reset">
                        <span class="hint-text">Copyright © 2014 </span>
                        <span class="font-montserrat">REVOX</span>.
                        <span class="hint-text">All rights reserved. </span>
                        <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#"
                                class="m-l-10">Privacy Policy</a></span>
                    </p>
                    <p class="small no-margin pull-right sm-pull-reset">
                        <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
                    </p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END COPYRIGHT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    @include('layouts.extra.quick_view')
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
        <!-- BEGIN Overlay Content !-->
        <div class="overlay-content has-results m-t-20">
            <!-- BEGIN Overlay Header !-->
            <div class="container-fluid">
                <!-- BEGIN Overlay Logo !-->
                <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png"
                    data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                <!-- END Overlay Logo !-->
                <!-- BEGIN Overlay Close !-->
                <a href="#" class="close-icon-light btn-link btn-rounded  overlay-close text-black">
                    <i class="pg-icon">close</i>
                </a>
                <!-- END Overlay Close !-->
            </div>
            <!-- END Overlay Header !-->
            <div class="container-fluid">
                <!-- BEGIN Overlay Controls !-->
                <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..."
                    autocomplete="off" spellcheck="false">
                <br>
                <div class="d-flex align-items-center">
                    <div class="form-check right m-b-0">
                        <input id="checkboxn" type="checkbox" value="1">
                        <label for="checkboxn">Search within page</label>
                    </div>
                    <p class="fs-13 hint-text m-l-10 m-b-0">Press enter to search</p>
                </div>
                <!-- END Overlay Controls !-->
            </div>
            <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
            <div class="container-fluid p-t-20">
                <span class="hint-text">
                    suggestions :
                </span>
                <span class="overlay-suggestions"></span>
                <br>
                <div class="search-results m-t-30">
                    <p class="bold">Pages Search Results: <span class="overlay-suggestions"></span></p>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <img width="36" height="36" src="assets/img/profiles/avatar.jpg"
                                        data-src="assets/img/profiles/avatar.jpg"
                                        data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on pages
                                    </h5>
                                    <p class="small-text hint-text">via john smith</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <div>T</div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> related
                                        topics</h5>
                                    <p class="small-text hint-text">via pages</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div class="thumbnail-wrapper d48 circular bg-success text-white ">
                                    <div>M
                                    </div>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> music
                                    </h5>
                                    <p class="small-text hint-text">via pagesmix</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div
                                    class="thumbnail-wrapper d48 circular bg-info text-white d-flex align-items-center">
                                    <i class="pg-icon">facebook</i>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin "><span class="semi-bold result-name">ice cream</span> on
                                        facebook</h5>
                                    <p class="small-text hint-text">via facebook</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div
                                    class="thumbnail-wrapper d48 circular bg-complete text-white d-flex align-items-center">
                                    <i class="pg-icon">twitter</i>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin ">Tweats on<span class="semi-bold result-name"> ice
                                            cream</span></h5>
                                    <p class="small-text hint-text">via twitter</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                            <!-- BEGIN Search Result Item !-->
                            <div class="d-flex m-t-15">
                                <!-- BEGIN Search Result Item Thumbnail !-->
                                <div
                                    class="thumbnail-wrapper d48 circular text-white bg-danger d-flex align-items-center">
                                    <i class="pg-icon">google_plus</i>
                                </div>
                                <!-- END Search Result Item Thumbnail !-->
                                <div class="p-l-10">
                                    <h5 class="no-margin ">Circles on<span class="semi-bold result-name"> ice
                                            cream</span></h5>
                                    <p class="small-text hint-text">via google plus</p>
                                </div>
                            </div>
                            <!-- END Search Result Item !-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Overlay Search Results !-->
        </div>
        <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src={{ asset('assets/plugins/pace/pace.min.js') }} type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src={{ asset('assets/plugins/liga.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/jquery/jquery-3.2.1.min.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/modernizr.custom.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/popper/umd/popper.min.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/jquery/jquery-easy.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/plugins/jquery-actual/jquery.actual.min.js') }}></script>
    <script src={{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}></script>
    <script type="text/javascript" src={{ asset('assets/plugins/select2/js/select2.full.min.js') }}></script>
    <script type="text/javascript" src={{ asset('assets/plugins/classie/classie.js') }}></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src={{ asset('pages/js/pages.js') }}></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src={{ asset('assets/js/scripts.js') }} type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src={{ asset('assets/js/demo.js') }} type="text/javascript"></script>
    <script src={{ asset('assets/js/scripts.js') }} type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-analytics.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.24.0/firebase-performance.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        var firebaseConfig = {
            apiKey: "AIzaSyCgNPM-_92P7J_Cgx4uO4JeCH9zLqP2YfM",
            authDomain: "pages-a8339.firebaseapp.com",
            databaseURL: "https://pages-a8339.firebaseio.com",
            projectId: "pages-a8339",
            storageBucket: "pages-a8339.appspot.com",
            messagingSenderId: "263806062709",
            appId: "1:263806062709:web:e83ffdd203e5ce1738683c",
            measurementId: "G-C2LW91T579"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        firebase.performance();
    </script>
</body>

<!-- Mirrored from pages.revox.io/dashboard/latest/html/condensed/builder.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Feb 2021 12:09:06 GMT -->

</html>
