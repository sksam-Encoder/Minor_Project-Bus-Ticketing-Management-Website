<?php

include("./header.php");
$data=$Tickets->GetTickets($em);
?>
<style>

footer#footer {
    background-color: #166d3b;
    background-image: linear-gradient(
147deg
, #166d3b 0%, #000000 74%);
    width: 100%;
    position: absolute;
    bottom: 0%;
}
.manage{

    position: absolute;
    bottom: -10.5%;
    width: 100%;
    /* margin-top: 8px; */
    height: 80px;

  

}

a:hover{

    text-decoration: none;
}



</style>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Destination</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

<?php

 foreach($data as $data)      {
                                    
     echo "<tr>";
     echo "<th scope='row'>" . $data['id'] ."</td>";
     echo ' <td>   <a href="invoice.php?entry_id='.$data['id']. '">    '.$data['name'].'  </a>  </td> ' ; 
     echo "<td>" . $data['route'] . "</td>";
     echo "<td>" . $data['date'] . "</td>";

     echo "</tr>";
     

 }?>







  </tbody>
</table>

<?php
require("./footer.php");

?>