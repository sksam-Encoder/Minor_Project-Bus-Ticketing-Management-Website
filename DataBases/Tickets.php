<?php





class Tickets 
{

public $con=null;


  public function __construct(DBController $db)
  {
      if (!isset($db->db)) return null;
      $this->con = $db;
  }


public function GetTickets($email=null)
{

    $result= $this->con->db->query("SELECT * FROM tickets  where email='$email' "); 
    
    $resultArray = array();

    // fetch product data one by one
    
    while ($item=mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        $resultArray[] = $item;
    
    }

    return $resultArray;
    
  

}

public function GetTicketsid($id=null)
{

    $result= $this->con->db->query("SELECT * FROM tickets  where id='$id' "); 
    
    $resultArray = array();

    // fetch product data one by one
    
    while ($item=mysqli_fetch_array($result, MYSQLI_ASSOC))
    {

        $resultArray[] = $item;
    
    }

    return $resultArray;
    
  

}

public function insertTickets($bus_no=null,$route=null,$peoples=null,$pri=null,$totalprice=null,$date=null,$trip=null,$name=null,$email=null,$phone=null)
{   



   if (date("Y-m-d")>$date)
   {

    echo '<script>alert("Date passed")</script>';
     return 0;


   }
   else

    {
    $result= $this->con->db->query("INSERT INTO tickets VALUES ('','$bus_no','$route','$peoples','$pri','$totalprice','$date','$trip','$name','$email','$phone')"); 
    
    if($result)
    {

            echo '<script>alert("Tickets Booked Successfully")</script>';
             return 1;
    }
            else
            {

                echo '<script>alert("Tickets are Not Booked !")</script>';
                return 0;

            }    
  
    }
}
}