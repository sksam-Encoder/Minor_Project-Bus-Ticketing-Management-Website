<?php


require("./Databases/DBController.php");
require("./Databases/user.php");

$db2 = new DBController();
$user2 = new user($db2);


require("./_Template/login_template.php");


?>