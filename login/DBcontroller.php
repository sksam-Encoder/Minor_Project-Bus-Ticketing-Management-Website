<?php

class DBcontroller{
   
   public   $db=null;
    // Database Connection Properties
   protected $host = 'localhost';
   protected $user = 'root';
   protected $password = '';
   protected $database = "user";



   // call constructor
   public function __construct()
   {
       $this->db = mysqli_connect($this->host, $this->user, $this->password, $this->database);
       if ($this->db->connect_error){
           echo "Fail to connect " . $this->con->connect_error;
       }
   





   }


   public function __destruct()
   {
       $this->closeConnection();
   }

      // for mysqli closing connection
      protected function closeConnection(){
        if ($this->db != null ){
            $this->db->close();
            $this->db = null;
        }
    }



  
   







}


?>