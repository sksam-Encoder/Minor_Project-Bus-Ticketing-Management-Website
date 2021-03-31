<?php

include("./database.php");
include("./_Template/nav.php");

$datetime = new DateTime();


?>
<style>
    .fa-truck:before {
        content: "\f0d1";
        color: yellowgreen;
    }

    .sep {

        margin-left: 10px;

    }
</style>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Welcome <small> (admin) <?php echo $row['name'];  ?> </small>
                </h1>
            </div>
        </div>
        <!--user widgets-->
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-users fa-5x"></i>
                        <h3><?php echo $userCount;  ?></h3>
                    </div>
                    <div class="panel-footer back-footer-green">
                        <a href="./Customers.php" style="text-decoration: none;color: white"><strong>Customers</strong></a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-brown">
                    <div class="panel-body">
                        <i class="fa fa-money fa-5x"></i>
                        <h3>7</h3>
                    </div>
                    <div class="panel-footer back-footer-brown">
                        <a href="bookings_view.php" style="text-decoration: none;color: white"><strong>Bookings</strong></a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-body">
                        <i class="fa fa fa-calendar fa-5x"></i>
                        <h5> <?php echo $datetime->format('Y-m-d H:i:s'); ?></h5>
                    </div>
                    <div class="panel-footer back-footer-red">
                        <strong>Date</strong>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-user fa-5x"></i>
                        <h3>admin</h3>
                    </div>
                    <div class="panel-footer back-footer-blue">
                        <a href="membership_profile.php" style="text-decoration:none;color: white"><strong>Account</strong></a>

                    </div>
                </div>
            </div>
        </div>
        <!--admin widgets row-->
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-truck fa-5x"></i>
                        <h3> <?php echo $ttlBus; ?></h3>
                    </div>
                    <div class="panel-footer back-footer-yellow">
                        <a href="./buses.php" style="text-decoration: none;color: white"><strong>Buses</strong></a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-green">
                    <div class="panel-body">
                        <i class="fa fa-truck fa-5x"></i>
                        <h3>2</h3>
                    </div>
                    <div class="panel-footer back-footer-yellow">
                        <a href="./ADD_BUS/product/add-product.html" style="text-decoration: none;color: white"><strong> Add Buses</strong></a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-blue">
                    <div class="panel-body">
                        <i class="fa fa-comment fa-5x"></i>
                        <h3> <?php echo $fee;   ?></h3>
                    </div>
                    <div class="panel-footer back-footer-blue">
                        <a href="./feedback.php" style="text-decoration: none;color: white"><strong>Feedback</strong></a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-red">
                    <div class="panel-body">
                        <i class="fa fa fa-check-circle fa-5x"></i>
                        <h3>3 </h3>
                    </div>
                    <div class="panel-footer back-footer-red">
                        <a href="availability_view.php" style="text-decoration: none;color: white"><strong>Availability</strong></a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="panel panel-primary text-center no-boder bg-color-brown">
                    <div class="panel-body">
                        <i class="fa fa-road fa-5x"></i>
                        <h3> <?php echo $ttlBus;  ?></h3>
                    </div>
                    <div class="panel-footer back-footer-brown">
                        <a href="./Routes.php" style="text-decoration: none;color: white"> <strong>Routes</strong></a>

                    </div>
                </div>
            </div>
        </div>
        <!--row ends here-->
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="fa fa-bell"> <strong>Bookings Due Today</strong></span>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="alert alert-success">
                            <strong>No Bookings Due Today</strong>.
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID No.</th>
                                    <th>FullName</th>
                                    <th>Phone</th>
                                    <th>Bus</th>
                                    <th>Seat</th>
                                    <th>Date</th>
                                    <th>DepartureTime</th>
                                    <th>Amount</th>
                                    <th>DateBooked</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <a href="" class="btn btn-success btn-block fa fa-list sep"><span class="mx-4"> See All Due Today </span></a>
                    </div>
                </div>
            </div>

        </div>
        <!--row ends here-->
        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="fa fa-bell "> <strong style="color:green"> FEEDBACK Table</strong></span>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <div class="alert alert-success">
                            <strong>Customer Response</strong>.
                        </div>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                              <?php
                                 foreach ($feedbc as $key ) { 

                                echo "<tr>";
                                    echo "<th scope='row'>" . $key['ID'] ."</td>";
                                        echo "
                                    <td>" . $key['USER_NAME'] . "</td>";
                                    echo "<td>" . $key['EMAIL'] . "</td>";

                                    echo "</tr>";
                                }?>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <a href="./feedback.php" class="btn btn-danger btn-block fa fa-list mx-5 sep "> <span class="mx-4"> View All users Feedback </span> </a>
                    </div>
                </div>
            </div>

        </div>












    </div>

    <!-- /. ROW  -->
    <footer><strong>
            <p>Bus Booking System. Developed By: Team Insane. Brought To You by: VK</p>
        </strong></footer>
</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->

<!-- /. WRAPPER  -->
<!-- JS Scripts-->
<!-- jQuery Js -->















<script src="assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom-scripts.js"></script>

<script src="assets/js/morris/morris.js"></script>



</body>

</html>