<?php

require("./DataBases/DBController.php");
require("./DataBases/getBus.php");
require("./DataBases/user.php");
require("./DataBases/Tickets.php");

$DBController = new  DBController();

$getbus = new getbus($DBController);
$Buses = $getbus->Getbus();
$totalBus=$getbus->totalbus();
$user = new user($DBController);
$currUser= $user->name;
$Tickets = new Tickets($DBController);








?>






