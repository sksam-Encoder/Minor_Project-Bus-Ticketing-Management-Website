<?php

require("../../../DataBases/DBController.php");
require("../../../DataBases/getBus.php");
$DBController= new DBController();
$bus = new getbus($DBController);





if(isset($_POST['addbus']))
{


  
  $busno = $_POST['busno'] ;
  $route=$_POST['route'];
  $amount=$_POST['amount'];
  $time=$_POST['time'];
  $dept=$_POST['dept'];
  $rtrip=$_POST['rtrip'];
  $desc=$_POST['desc'];

  $cat=$_POST['cat'];

  $seats=$_POST['Seats'];
  
  $img=$_FILES['img'];
  $imgname= $img['name'];
  $temp = $img['tmp_name'];
  $dest  = "../../../assets/Blog-post/$imgname";

 $bus->InsertBus($busno,$route,$amount,$time,$dept,$rtrip,$dest,$temp,$imgname,$desc,$cat,$seats);





}





?>











<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Add New Bus</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="css/fontawesome.min.css" />
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
  <!-- http://api.jqueryui.com/datepicker/ -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="css/templatemo-style.css">
  <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body>


  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12">
              <h2 class="tm-block-title d-inline-block">Add New Bus</h2>
            </div>
          </div>
          <div class="row tm-edit-product-row">
            <div class="col-xl-6 col-lg-6 col-md-12">
              <form class="tm-edit-product-form" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                  <label for="name">Route (e.g- Kolkata To Delhi)
                  </label>
                  <input id="name" name="route" type="text" class="form-control validate" required />
                </div>
                <div class="form-group mb-3">
                  <label for="name">Bus Number(e.g- WB-02-23E4)
                  </label>
                  <input id="name" name="busno" type="text" class="form-control validate" required />
                </div>
                <div class="form-group mb-3">
                  <label for="name">Amount(In RUPEES.)
                  </label>
                  <input id="amount" name="amount" type="number" class="form-control validate" required />
                </div>
                <div class="form-group mb-3">
                  <label for="return">Return Trip</label>
                  <select class="custom-select tm-select-accounts" id="" name="rtrip" >
                    <option selected>Select category</option>
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="description">Bus Description</label>
                  <textarea class="form-control validate" name="desc"  rows="3" required></textarea>
                </div>
                <div class="form-group mb-3">
                  <label for="category">Category</label>
                  <select class="custom-select tm-select-accounts" name="cat" >
                    <option selected>Select category</option>
                    <option value="Non AC with FOOD">Non AC with FOOD</option>
                    <option value="AC with FOOD">AC with FOOD</option>
                  </select>
                </div>
                <div class="row">
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label for="expire_date"> Time
                    </label>
                    <input type="text" class="form-control validate" name="time"  data-large-mode="true" />
                  </div>
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label for="Seats">Total Seats Available
                    </label>
                    <input id="Seats" name="Seats" type="number"  class="form-control validate" required />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label for="Seats">Departure Time
                    </label>
                    <input id="time" name="dept" type="time" class="form-control validate" required />


                  </div>

                </div>


            </div>
            
            <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
              <div class="tm-product-img-dummy mx-auto ">
                <i class="fas fa-cloud-upload-alt tm-upload-icon"
                  onclick="document.getElementById('fileInput').click();"></i>
              </div>
              <div class="custom-file mt-3 mb-3">
                <input id="fileInput" type="file" style="display:none;" name="img" />
                <input type="button" class="btn btn-primary btn-block mx-auto"  value="UPLOAD DESTINATION IMAGE"
                  onclick="document.getElementById('fileInput').click();" />
              </div>
            </div>
            <div class="col-12">
              <button type="submit" name="addbus" class="btn btn-primary btn-block text-uppercase">Add Bus Now</button>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
        Copyright &copy; <b>2021</b> All rights reserved.

        Design: <a rel="nofollow noopener" href="" class="tm-footer-link">Team Insane</a>
      </p>
    </div>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
  <!-- https://jqueryui.com/download/ -->
  <script src="js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script>
    $(function () {
      $("#expire_date").datepicker();
    });
  </script>
</body>

</html>