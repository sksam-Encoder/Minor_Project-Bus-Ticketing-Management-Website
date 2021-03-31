<?php

require("./function.php");

 if(!empty($_POST))  //the ajax does;not support submit request.  
{
$user_name=$_POST['username'];                                
$user_em=$_POST['useremail'];
$user_pass=$_POST['userpassword'];
$pass2=$_POST['pass2'];
$phone=$_POST['phone'];
$err_msg;

if(strlen($user_name)<5 ) 
{

$err_msg="Name should be greater than 4";

echo json_encode(array($err_msg, 1));


}
else
if(strlen($user_em)<5  || !filter_var($user_em,FILTER_VALIDATE_EMAIL))
{



$err_msg="Email should be greater than zero and its invalid";

echo json_encode(array($err_msg, 2));



}

else
if( strlen($user_pass)<6 // at least 7 chars 
   || strlen($user_pass)>21 // at most 20 chars 
   ||  !preg_match('`[A-Z]`',$user_pass) // at least one upper case 
   ||  !preg_match('`[a-z]`',$user_pass) // at least one lower case 
   ||  !preg_match('`[0-9]`',$user_pass) // at least one digit 
  )
{

   $err_msg="password should contain atleast 1 captital letter and 1 Number";
   echo json_encode(array($err_msg, 3));


 
}
else
if($user_pass!=$pass2){
  
  $err_msg="Password Does'nt Match";
  echo json_encode(array($err_msg, 4));

   
}


else
if(!strlen($phone)==10 && !strlen($phone)==13 )
{

$err_msg="phone is incorrect";
echo json_encode(array($err_msg, 5));


}
else
if(empty($err_msg))
{

  $user->insertUser($user_name,$user_em,$user_pass,$phone);




}
else{

  echo("method not called");

}


}



?>