<?php
require './database.php';


require './_Template/nav.php';


?>


<style>



.table {
    width: 100%;
    margin-bottom: 20px;
    background: yellowgreen;
    color: #fff;
}


</style>





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
      







<table class="table table-borderless table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Feedback</th>
    </tr>
  </thead>

<tbody>
  <?php foreach ($feedbc as $key ) { ?>



<?php


     echo "<tr>";
     echo "<th scope='row'>" . $key['ID'] ."</td>";
     echo "<td>" . $key['USER_NAME'] . "</td>";
     echo "<td>" . $key['EMAIL'] . "</td>";
     echo "<td>" . $key['FEEDBACK'] . "</td>";

     echo "</tr>";






  } ?>
    

  </tbody>
</table>




















<?php
require './_Template/header.php';
?>
