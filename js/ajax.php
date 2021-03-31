<?php
require("../DataBases/DBController.php");

require("../DataBases/getBus.php");


// DBController object
$db = new DBController();

// Product object
$product = new getbus($db);

if(isset($_POST['busid']))
{

$result = $product->getBusID($_POST['busid']);
echo json_encode($result);


}


