<?php
session_start();
$em=$_SESSION['email'];
$row = $user2->con->db->query("SELECT * FROM admin_data Where email = '$em'")->fetch_assoc();
$userCount=$user2->getUserNo();
$user=$user2->getUser();
$feedbc=$user2->getFeed();
 $ttlBus=$bus->getBusesNo();
 $fee=$user2->getUserFeed();


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUS BOOKING SYSTEM</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet">
     <!-- Google Fonts-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">






   
</head>
<body >
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Bus Booking</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">

            <li> <p style="color:#fff!important">   <?php  echo $row['name']; ?>  </p>  </li>

            <li class="dropdown">


                 <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
              <!--login/logout area starts-->
              <li>
                              <a href="admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm hidden-xs"><i class="fa fa-cog"></i> <strong>Admin Area</strong></a>
               <a href="admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm visible-xs btn-sm"><i class="fa fa-cog"></i> <strong>Admin Area</strong></a>
                                                           <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
              </ul>
              <ul class="nav navbar-nav visible-xs">
              </ul>
                                        </li>
            <!--login/logout area ends-->
            <li class="divider"></li>
            <form action="" method="POST">
            <li><a class="btn navbar-btn btn-primary" href="logout.php"><i class="fa fa-power-off"></i> <strong style="color:white">Sign Out</strong> </a></li>
            </form>
        </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse collapse" style="height: 0px;">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="#"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="./Customers.php"><i class="fa fa-users"></i>Customers</a>
                    </li>
					<li>
                        <a href="bookings_view.php"><i class="fa fa-money"></i>Bookings</a>
                    </li>
                    <li>
                        <a href="./buses.php"><i class="fa fa-truck"></i>Buses</a>
                    </li>
                    <li>
                        <a href="./ADD_BUS/product/add-product.php"><i class="fa fa-truck"></i>Add Buses</a>
                    </li>

                    <li>
                        <a href="seats_view.php"><i class="fa fa-sitemap"></i>Seats</a>
                    </li>
                    <li>
                        <a href="availability_view.php"><i class="fa fa-check-circle"></i> Availability</a>
                    </li>
                    <li>
                        <a href="./Routes.php"><i class="fa fa-road"></i> Routes</a>
                    </li>
                     <li>
                        <a href="hooks/summary-reports.php"><i class="fa fa-list"></i> Reports</a>
                    </li>                        </ul>



            </div>

        </nav>