<?php

require("./header.php");


if ($_SESSION['email'] == true) {
       
   $eid = $_GET['entry_id'];

    $data=$Tickets->GetTicketsid($eid);
    $Route     = $data[0]['route'];
    $RouteChunks = explode("To", $Route);
    $tick_no =rand(0,500);
}
else
{

echo '<script>  
alert("Login to View Tickets")
location.replace("index.php")
 </script>'; 


}
?>



      


<div class="Manage my-3 py-2">

<section id="first1">
   <h4 class="ml-4" style="color: green; font-weight:bold  ">Your Currently Booked Tickets :</h4>
   <div class="place d-flex justify-content-between text-white">
    <h6 class=""> From :<?php  echo $RouteChunks[0];    ?>    </h6>      <h6 class=""> To :<?php  echo $RouteChunks[1];    ?> </h6>
    </div>
    <h6 class="text-white" style="font-size: 13px;"  >Date :  <?php  echo $data[0]['date'];    ?>    </h6>
    <div class="place d-flex justify-content-between">
        <h6 class=" text-white">  Seat No: 15</h6>       <h6 class=" text-white"> Ticket No: <?php echo $tick_no;  ?></h6>
        </div>

</section>
<section id="second1">
<h4> </h4>
<h6>No. of Persons: <?php  echo  $data[0]['peoples'];   ?> </h6>
<h6>Price Per Head :<?php  echo  $data[0]['price'];   ?></h6>
<h6>Total Price : <?php  echo  $data[0]['total_price'];   ?></h6>

<div class="d-flex justify-content-end logo">

    <img src="./assets/Transport.jpg" alt=""  style="border-radius: 50%;"  >

</div>




</section>
<section id="third1">
    <h4 style=" font-weight:bold ">User Details :</h4>
    <h6>Name : <?php  echo  $data[0]['name'];   ?></h6>
    <h6>Email : <?php  echo  $data[0]['email'];   ?></h6> 
    <h6>Service Phone : <?php  echo  $data[0]['phone'];   ?></h6>






</section>
</div>

<!-- requiring Footer -->
<?php
require("./footer.php");
?>

<!-- requiring Footer -->
  

</body>

</html>