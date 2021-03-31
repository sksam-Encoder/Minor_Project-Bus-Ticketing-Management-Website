<?php

class getbus
{

    public $con = null;


    public function __construct(DBController $db)
    {
        if (!isset($db->db)) return null;
        $this->con = $db;
    }


    public function Getbus()
    {

        $result = $this->con->db->query("SELECT * FROM buses");

        $resultArray = array();

        // fetch product data one by one
        $i = 0;
        while ($i < 4) {

            $item = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $resultArray[] = $item;
            $i++;
        }

        return $resultArray;
    }
    public function totalbus()
    {
        $result = $this->con->db->query("SELECT * FROM buses");
        $resultArray = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
    public function getBusID($item_id = null)
    {


        if (isset($item_id)){
            $result = $this->con->db->query("SELECT * FROM buses WHERE ID={$item_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }
            return $resultArray;
        }
    }
    public function InsertBus($bus_no = null, $route = null, $amount = null, $time = null, $dep_time = null, $round_trip = null, $dest = null, $temp = null, $imgname = null, $category = null, $bus_desc = null, $seats = null)
    {

        $count = $this->con->db->query("SELECT * FROM buses WHERE route='$route' AND time='$time' ");

        $countBus = mysqli_num_rows($count);

        if ($countBus == 0) {


            $result = $this->con->db->query("INSERT INTO  buses (ID,bus_no,route,amount,time,arrivalTime,round_trip,bus_image,category,bus_desc,seats) VALUES ('','$bus_no','$route','$amount','$time','$dep_time','$round_trip','$imgname','$category','$bus_desc','$seats'); ");
            move_uploaded_file($temp, $dest);
            if ($result) {

                echo '<script>alert("bus inserted successfully")</script>';
            } else {

                echo '<script>alert("bus Not Inserted!")</script>';
            }
        } else {


            echo '<script>alert("Bus already exist")</script>';
        }
    }
    public function deletebus($busno = null)
    {

        $result = $this->con->db->query(" DELETE FROM buses where bus_no='$busno' ");


        if ($result) {


            echo " delete successfull";
        } else {

            echo " deletion unsuccessfull";
        }
    }

    public  function getBusesNo()
    {
        // code...
        $name = $this->con->db->query("SELECT * FROM buses ");

        $count = mysqli_num_rows($name);

        return $count;
    }
    public  function sample_Images()
    {
        // code...
        $name = $this->con->db->query("SELECT * FROM sample_image ");
        $resultArray = array();
        while ($item = mysqli_fetch_array($name, MYSQLI_ASSOC)) {
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}//class
