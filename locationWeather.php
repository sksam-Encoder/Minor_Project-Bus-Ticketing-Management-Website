<?php

require("./header.php");


?>
<style>




</style>





<div class="container2">
  <div class="card2" style="width: 18rem;">
    <h2><i class="fa fa-map-marker" style="color:white"></i> <span id="location"></span></h2>
    <h6 id="Weather"></h6>
    <h4> <span id="temp"> </span> <sup>0</sup> C </h4>
    <img src="" alt="" id="icon">

   <input type="text" id="locate" class="weat" placeholder="Enter place For Weather" >

    <!-- <button onclick="window.location.reload();" class="refresh">  -->
    <button onclick="fun();" class="refresh"> 
        <i class="fas fa-sync" style="color: white;"></i>
    </button>


  </div>



</div>
    <script>
          function fun()
      {
            var locate=document.getElementById("locate").value;
           link ="https://api.openweathermap.org/data/2.5/weather?q="+locate+"&appid=2ed938100a467aff58c93011a4a5b0c1";
     var request =new XMLHttpRequest();
     request.open('GET',link,true);
     request.onload = function (){
      
      var OBJ = JSON.parse(this.response);
      console.log(OBJ);
      var  temp= OBJ.main.temp - 273.15;
      document.getElementById('Weather').innerHTML=OBJ.weather[0].description;
      document.getElementById('location').innerHTML=OBJ.name;
      document.getElementById('temp').innerHTML= temp.toFixed(2);
      document.getElementById('icon').src="http://openweathermap.org/img/w/"+OBJ.weather[0].icon+".png";

     }
     if(request.status==200)
     {
         console.log("Error Occured");
     }
  
   request.send();
    } //function fun
    </script>
   
<?php

require("./footer.php");

?>