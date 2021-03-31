<?php
class user 
{
private $id;
private $name;
private $email;
private $phone;
private $password;
public $con = null;
public function __construct(DBcontroller $db)
{


    if (!isset($db->db)) return null;
    $this->con = $db;

    

}



public function insertData($name=null,$email=null,$password=null,$phone=null)
{
    


    $sql ="INSERT INTO user_data VALUES('','$name','$email','$password','$phone')";
    
    
    $result = $this->con->db->query("SELECT * FROM user_data  WHERE email='$email' ");

        
       $countRow  =mysqli_num_rows($result);
       
       if($countRow!=0)
       {

        echo json_encode(array("Email Already Exists ", 7));


       }
     else
    if ($this->con->db->query($sql) === TRUE)
    {
        echo json_encode(array("Data Inserted", 6));
    }
    else
    {
    echo json_encode( "Error: " . $sql . "<br>" .$this->con->db->error,6);
    }
}




public  function InsertUser($name=null,$email=null,$password=null,$phone=null)
{
    # code...
     $this->name=$name;
     $this->email=$email;
     $this->phone=$phone;
     $this->password=$password;
     $this->insertData($name,$email,$password,$phone,);

}

public  function DetectUser($email=null,$password=null)
{
    # code...

     $this->email=$email;
     $this->password=$password;
 
$result = $this->con->db->query("SELECT * FROM user_data  WHERE email='$email' And password='$password' ");
  
$countRow=mysqli_num_rows($result);

if($countRow!=0)
{

echo ("Login Sucessfull");


}
else
{

echo ("Invalid Credentials");

}





}










}
?>