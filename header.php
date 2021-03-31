<?php


// require("/function.php");
require("./function.php");
//  error_reporting(0);



session_start();
// error_reporting(0);
if ($_SESSION['email'] == true) {

    $em = $_SESSION['email'];
    $row = $user->con->db->query("SELECT * FROM user_data Where email = '$em'")->fetch_assoc();
    $data = $row['name'];
    $mark = array();
    $mark[]="Logout";
    $mark[]="<i class='fas fa-sign-out-alt'> </i>";    
} else {

    $data = "login";
    $mark= array();
    $mark[0] = null;
    $mark[1] = null;
    
    $uri = $_SERVER['REQUEST_URI'];
    // if($uri=="/minor_project/invoice.php")
    // {



    // }


}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackBus</title>
    <!--  custom css -->

    <link rel="stylesheet" href="./css/style.css">

    <!--  custom css -->
    <!-- font awesome -->
    <link rel="stylesheet" href="./css/all.css">
    <!-- font awesome -->


    <!--  owl css -->

    <link rel="stylesheet" href="./css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl/owl.theme.default.min.css">


    <!--  owl css -->

    <!-- boot css -->

    <link rel="stylesheet" href="./css/bootstrap.css">

    <!-- boot css -->

    <!-- using invoice css -->

    <link rel="stylesheet" href="./css/InvoiceStyle.css">


    <!-- using invoice css -->



    <!-------------------------------- Booking css--------------------- -->



    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!----Bootstrap -->
    <!-- <link type="text/css" rel="stylesheet" href="./css/Bookcss/bootstrap.min.css" /> -->

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="./css/Bookcss/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!------------------------------------x-- Booking css x ---------------------------------->

    <!-- Weather css----------------------------------------------------------------------- -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/WeatherCss/Weatherstyle.css">


    <!--x Weather css---x-------------------------------------------------------------------- -->


<!-- preloader -->








<!-- preloader -->



</head>

<body>
    <!---------------------------------Navigetion-------------------------------------------->
      
    <header>
        <div class="strip d-flex justify-content-between px-4 py-1" style="background:#0097e6;">
            <p class="font-rale font-size-12 text-white m-0 " > In Case of any query contact our helpline no. 7998456901</p>
            <div class="font-rale font-size-14">
                <a href="./sign-up.php" class="px-3 border-right border-left text-white"> <?php echo $data ?></a>
                <a href="./Logout.php" class="px-3   text-white"> <?php echo $mark[0]; ?></a>
                <a href="./Logout.php" class="px-3 border-right text-white"><?php echo $mark[1]; ?>  </a>
            </div>
        </div>
        <div class="nav1">
            <div class="nav-menu1 flex-row1">
                <div class="nav-brand1">


                    <a class="anch" href="#" n class="text-gray"><img src="./assets/logo.jpeg" alt="logo" id="Mlogo"> </a>


                </div>

                <div class="toogle-collapse1">

                    <div class="toogle-icon1">

                        <i class="fas fa-bars"></i>

                    </div>


                </div>
                <div>
                    <ul class="nav-item1">
                        <li class="nav-link1">
                            <a class="anch" href="./index.php">Home</a>
                        </li>

                        <li class="nav-link1">
                            <a class="anch" href="./locationWeather.php">Explore Weather</a>
                        </li>

                        <li class="nav-link1">
                            <a class="anch" href="./ticketsTable.php">My Tickets</a>
                        </li>

                        <li class="nav-link1">
                            <a class="anch" href="">About</a>
                        </li>

                    </ul>
                </div>
                <div class="social text-gray">

                    <a class="anch" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="anch" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="anch" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="anch" href="#"><i class="fab fa-youtube"></i></a>

                </div>
            </div>
        </div>
    </header>