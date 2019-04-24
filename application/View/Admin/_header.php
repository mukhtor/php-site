<!DOCTYPE HTML>
<html>
<head>
    <title>Maktab Admin</title>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="styles/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="styles/admin/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="styles/admin/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="styles/admin/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <!-- chart -->
    <script src="styles/admin/js/Chart.js"></script>
    <!-- //chart -->
    <!--animate-->
    <link href="styles/admin/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="styles/admin/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!----webfonts--->
    <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!---//webfonts--->
    <!-- Meters graphs -->
    <script src="styles/admin/js/jquery-1.10.2.min.js"></script>
    <!-- Placed js at the end of the document so the pages load faster -->

</head>

<body class="sticky-header left-side-collapsed"  onload="initMap()">
<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <h1><a href="">Easy <span>Admin</span></a></h1>
        </div>
        <div class="logo-icon text-center">
            <a href=""><i class="lnr lnr-home"></i> </a>
        </div>

        <!--logo and iconic logo end-->
        <div class="left-side-inner">
            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href=""><i class="lnr lnr-power-switch"></i><span>Asosiy qism</span></a></li>

            </ul>
            <!--sidebar nav end-->
        </div>
        <div>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="index.php?route=Admin/tables_news"><i class="lnr lnr-tablet"></i><span>Malumotlar jadvali</span></a></li>

                <li><a href="index.php?route=Admin/tables_images"><i class="lnr lnr-tablet"></i><span>Rasmlar jadvali</span></a></li>

            </ul>
        </div>
        <div>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="index.php?route=Admin/create_news"><i class="lnr lnr-plus-circle"></i><span>Malumotlar kiritish</span></a></li>
                <li><a href="index.php?route=Admin/create_images"><i class="lnr lnr-plus-circle"></i><span>Rasm kiritish</span></a></li>
            </ul>
        </div>
        <div>
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li><a href="index.php?route=Admin/update_news"><i class="lnr lnr-pencil"></i><span>Malumotlar o'zgartirish</span></a></li>
            </ul>
        </div>
    </div>
    <!-- left side end-->

    <!-- main content start-->
    <div class="main-content">
        <!-- header-starts -->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--notification menu start -->
            <div class="menu-right">
                <div class="user-panel-top">
                    <div class="profile_details_left">
                        <ul class="nofitications-dropdown">
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span style="background:url(styles/admin/images/admin.ico) no-repeat center"> </span>
                                        <div class="user-name">
                                            <p>Bobojonov Muxtorjon<span>Administrator</span></p>
                                        </div>
                                        <i class="lnr lnr-chevron-down"></i>
                                        <i class="lnr lnr-chevron-up"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
                                    <li> <a href="index.php?route=-header-"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <div class="social_icons">
                        <div class="col-md-4 social_icons-left">
                            <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
                        </div>
                        <div class="col-md-4 social_icons-left pinterest">
                            <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
                        </div>
                        <div class="col-md-4 social_icons-left twi">
                            <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--notification menu end -->
        </div>
        <!-- //header-ends -->
<!--       START PAGE WRAPPER         -->
        <div class="page-wrapper">
<!--    SRART VIEW FILE    -->