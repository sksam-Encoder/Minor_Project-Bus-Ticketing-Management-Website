<?php
require './database.php';


require './_Template/nav.php';


?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
<div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Total Visited Customers <small></small>
                </h1>
                                    </div>
          </div>
      
<table class="table">
  <thead>
    <tr>
      <th scope="col">Customers id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>

       <!-- dynamic -->
    </tr>
  </thead>
  <tbody>
<?php foreach ($user as $key ) { ?>



<?php


     echo "<tr>";
     echo "<th scope='row'>" . $key['id'] ."</td>";
     echo "<td>" . $key['name'] . "</td>";
     echo "<td>" . $key['email'] . "</td>";
     echo "<td>" . $key['phone'] . "</td>";

     echo "</tr>";






  } ?>

  </tbody>
</table>
<?php
require './_Template/header.php';
?>
