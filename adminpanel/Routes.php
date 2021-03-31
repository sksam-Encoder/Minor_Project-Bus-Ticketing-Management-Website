<?php
require './database.php';


require './_Template/nav.php';

$totalbus=$bus->totalbus();

?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
<div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Bus Covering Routes <small></small>
                </h1>
                                    </div>
          </div>
      
<table class="table">
  <thead>
    <tr>
      <th scope="col">Bus Id</th>
      <th scope="col">Bus No</th>
      <th scope="col">Routes</th>
      <th scope="col">Time</th>

       <!-- dynamic -->
    </tr>
  </thead>
  <tbody>
<?php foreach ($totalbus as $key ) { ?>



<?php


     echo "<tr>";
     echo "<th scope='row'>" . $key['ID'] ."</td>";
     echo "<td>" . $key['bus_no'] . "</td>";
     echo "<td>" . $key['route'] . "</td>";
     echo "<td>" . $key['arrivalTime'] . "</td>";

     echo "</tr>";






  } ?>

  </tbody>
</table>
<?php
require './_Template/header.php';
?>
