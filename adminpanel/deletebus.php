<?php

require("./database.php");
if(isset($_POST['dat']));
{

 $value = $_POST['dat'];
 $bus->deletebus($value);
}



?>