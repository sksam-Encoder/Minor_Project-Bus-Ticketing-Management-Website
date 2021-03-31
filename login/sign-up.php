<?php
require("./DBcontroller.php");

require("./user.php");

$db2 = new DBcontroller();
$user2 = new user($db2);


require("./login_template.php");


?>