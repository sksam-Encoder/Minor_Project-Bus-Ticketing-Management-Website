<?php

if(isset($_POST['login_btn']))
{
$email= $_POST['login_email'];
$password=$_POST['login_password'];
if(strlen($email)<5  || !filter_var($email,FILTER_VALIDATE_EMAIL))
{
$err_msg="Email Invalid";
}
else
{

$pass= md5($password);  
$user2->DetectUser($email,$pass);
}

}





?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">
Login Form</div>
<div class="title signup">
Signup Form</div>
</div>
<div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" >
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab">
</div>
</div>
<div class="form-inner">
          <form action="#" class="login" method="POST">
            <div class="field">
              <input type="text" placeholder="Email Address" name="login_email" >
            </div>
<div class="field">
              <input type="password" placeholder="Password" name="login_password" >
            </div>
<div class="pass-link">
<a href="#">Forgot password?</a></div>
<div class="field btn">
              <div class="btn-layer">
</div>
<input type="submit" value="Login" name="login_btn">
            </div>
<div class="signup-link">
Not a member? <a href="">Signup now</a></div>
</form>

<!-- sign-up -->
<form  class="signup" method="POST" id="user_form"  >
            <p id="msg" style="color:red"></p>
            <div class="field">
                 
              <input type="text" name="username" id="username"  placeholder="Enter Name" require  > 
            </div>
            <p id="msg1" style="color:red"></p>

            <div class="field">
              <input type="text" name="useremail" id="useremail" placeholder="Email Address" required >
            </div>
            <p id="msg2" style="color:red"></p>

            <div class="field">
              <input type="password"  name="userpassword"  id="userpassword"placeholder="Password" required >
            </div>

            <div class="field">
              <input type="password" name="pass2" id="pass2" placeholder="Confirm password" required >
            </div>
            <p id="msg3" style="color:red"></p>

            <div class="field">
              <input type="text" name="phone" id="phone" placeholder="Enter Your Number" required >
            </div>

<div class="field btn">
              <div class="btn-layer">
</div>
<input type="button" id="btn_save" name="btn_save" value="Signup"/>
            </div>
            <p id="sucessMSG" style="color:green" ></p>
            <p id="MSG" style="color:red"></p>
</form>
</div>
</div>
</div>

<script>
$(document).ready(function(){

$('#btn_save').click(function(){
var data = $('#user_form').serialize();
$.ajax({
url: 'Login.php',
type: 'POST',
data: data,
success :function(response){
   console.log(response);
  var result = $.parseJSON(response);
   if(result[1]==1)
   {
     
    $('#msg').text(result[0]);

   }
   else
   if(result[1]==2)
   {
    
    $('#msg1').text(result[0]);



   }
   else
   if(result[1]==3)
   {
     
    $('#msg2').text(result[0]);

    
   }
   else
   if(result[1]==4)
   {

    $('#msg3').text(result[0]);


   }
   else
   if(result[1]==5)
   {
    $('#msg3').text(result[0]);


   }
   else
   if(result[1]==7)
   {

    $('#MSG').text(result[0]);

   }
   else
   {

    $('#sucessMSG').text(result[0]);


   }


} // ajax req



});


});

});

</script>




</body>




<script src="./index.js">
</script>

</html>





