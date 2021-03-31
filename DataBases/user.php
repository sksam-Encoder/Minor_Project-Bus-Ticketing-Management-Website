<?php
class user
{
    private $id;
    public $name;
    private $email;
    private $phone;
    private $password;
    public $con = null;
    public function __construct(DBcontroller $db)
    {


        if (!isset($db->db)) return null;
        $this->con = $db;
        $this->name = null;
    }



    public function insertData($name = null, $email = null, $password = null, $phone = null, $userA = null)
    {



        if ($userA == null) {

            $sql = "INSERT INTO user_data VALUES('','$name','$email','$password','$phone')";


            $result = $this->con->db->query("SELECT * FROM user_data  WHERE email='$email' ");
        } else {

            $sql = "INSERT INTO admin_data VALUES('','$name','$email','$password','$phone')";


            $result = $this->con->db->query("SELECT * FROM admin_data  WHERE email='$email' ");
        }

        $countRow  = mysqli_num_rows($result);

        if ($countRow != 0) {

            echo json_encode(array("Email Already Exists ", 7));
        } else
    if ($this->con->db->query($sql) === TRUE) {
            echo json_encode(array("Data Inserted", 6));
        } else {
            echo json_encode("Error: " . $sql . "<br>" . $this->con->db->error, 6);
        }
    }




    public  function InsertUser($name = null, $email = null, $password = null, $phone = null, $userA = null)
    {
        # code...

        $this->insertData($name, $email, $password, $phone, $userA);
    }

    public  function DetectUser($email = null, $password = null)
    {
        # code...

        $this->email = $email;
        $this->password = $password;





        $result = $this->con->db->query("SELECT * FROM user_data  WHERE email='$email' And password='$password' ");



        
        $countRow = mysqli_num_rows($result);


        if ($countRow != 0) {


            return 1;
        } else {

            echo '<script> alert("Invalid credentials ")  </script>';
        }
    }

    public  function DetectAdmin($email = null, $password = null)
    {

        $resultadmin = $this->con->db->query("SELECT * FROM admin_data  WHERE email='$email' And password='$password' ");
        $countRow2 = mysqli_num_rows($resultadmin);
       
         if ($countRow2 != 0) {

            return 1;
        }
        else
        {

            echo '<script> alert("Invalid Admin credentials ")  </script>';


        }
    
    
    }
    public  function getUser()
    {
        // code...
        $name = $this->con->db->query("SELECT * FROM user_data ");
        $resultarray = array();
        while ($item = mysqli_fetch_array($name)) {

            $resultarray[] = $item;

            // code...
        }

        return $resultarray;
    }
    public  function getUserNo()
    {
        // code...
        $name = $this->con->db->query("SELECT * FROM user_data ");

        $count = mysqli_num_rows($name);

        return $count;
    }
    public  function getUserFeed()
    {
        // code...
        $name = $this->con->db->query("SELECT * FROM feedback ");
      if($name)
      {
        $count = mysqli_num_rows($name);

        return $count;
      }
      else
      return 0;

}

    public function submitFeed($from, $feedback)
    {
        $result = $this->con->db->query("SELECT * FROM user_data  WHERE email='$from' ");
        $count = mysqli_num_rows($result);
        if ($count != 0) {

            $data = mysqli_fetch_array($result);
            $username = $data['name'];
            $res = $this->con->db->query("INSERT INTO feedback  VALUES ('','$from','$username','$feedback')");
            return $res;
        }
    }

    public function getFeed()
    {
        $result = $this->con->db->query("SELECT * FROM feedback  ");
        $resultarray = array();

        if($result)
        {

        while ($item = mysqli_fetch_array($result)) {

            $resultarray[] = $item;

            // code...
        }

        return $resultarray;
        
        }
         else
         {

            return 0;

         }




    }
}//class
