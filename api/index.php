<?php 

    require("../db.php");

    if(isset($_GET["data"])) {

        $sql = "";

        $data = $_GET["data"];

        $sql = "SELECT id, name, address, city, state, pin, bgroup, contact FROM $table WHERE bgroup like '$data' or name like '$data' or city like '$data'";

    } else {

        $sql = "SELECT id, name, address, city, state, pin, bgroup, contact FROM $table";
    }

    $result = mysqli_query($con, $sql);

        // echo var_dump($result);

    $noOfRows = mysqli_num_rows($result);

        // echo $noOfRows;

    $response = array();
    $i = 0;
    while($row = mysqli_fetch_assoc($result)) {

        $temp = array();

        $temp["name"] = $row["name"];
        $temp["address"] = $row["address"];
        $temp["city"] = $row["city"];
        $temp["state"] = $row["state"];
        $temp["pin"] = $row["pin"];
        $temp["bgroup"] = $row["bgroup"];
        $temp["contact"] = $row["contact"];
        $temp["id"] = $row["id"];

        // print_r($temp);
        // echo "<br/>";

        $response[$i] = $temp;
        $i+=1;

    }

    // print_r($response);

    echo json_encode($response);




    

    include("../dbClose.php");

?>