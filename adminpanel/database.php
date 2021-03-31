<?php
require("../DataBases/DBController.php");
require("../DataBases/user.php");
require("../DataBases/getBus.php");


$DBController = new  DBController();
$user2 = new user($DBController);
$bus = new getbus($DBController);
