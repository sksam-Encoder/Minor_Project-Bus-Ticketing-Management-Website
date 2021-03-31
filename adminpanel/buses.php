<?php
require './database.php';


require './_Template/nav.php';

$user=$user2->getUser();
$totalbus=$bus->totalbus();
?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div id="page-inner">
<div class="row">
            <div class="col-md-12">
                <h1 class="page-header">
                    Total Running Buses <small></small>
                </h1>
                                    </div>
          </div>




<table class="table">
  <thead>
    <tr>
      <th scope="col">Buses no.</th>
      <th scope="col">Route</th>
      <th scope="col">Time </th>
      <th scope="col">Round trip</th>
      <th scope="col">Seats</th>


       <!-- dynamic -->
    </tr>
  </thead>
  <tbody>
<?php foreach ($totalbus as $key ) { ?>



<?php


     echo "<tr>";
     echo "<th scope='row'>" . $key['bus_no'] ."</td>";
     echo "<td>" . $key['route'] . "</td>";
     echo "<td>" . $key['time']  .  "</td>";
     echo "<td>" . $key['round_trip'] . "</td>";
     echo "<td>" . $key['seats'] . "</td>";
     echo "</tr>";






  } ?>





  </tbody>
</table>

<div class=" Deleteinput mb-3">
  <input type="text"  placeholder="Enter Busno to Delete" name="txt1" id="txt1" style="width:200px; height:37px;" >
   <button type="button"  class="btn btn-danger" style="margin-bottom: 5px;">Delete</button>
</div>

<?php
require './_Template/header.php';
?>
<script type="text/javascript">
$('.btn').click(function() {
 let value =$('#txt1').val();
$.ajax({
  type: "POST",
  url: "deletebus.php",
  data: { dat: value}
}).done(function( msg ) {
  self.location.replace(location['href']);
  alert( "Data Saved: " + msg );
});
});
</script>
