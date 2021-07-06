<?php

    require("../../configurations.inc.php");
    require("../../db.php");

    

    $response = array();

    function register($name, $address, $city, $state, $pin, $bgroup, $contact, $password) {

        echo var_dump($con);

        

        $sql = "INSERT INTO `$table` ('name', 'address', 'city', 'state', 'pin', 'bgroup', 'contact', 'password') values($name, $address, $city, $state, $pin, $bgroup, $contact, $password)";

        $result = mysqli_query($con, $sql);

        if($result) {

            $response['status'] = "SUCCESS";
            $response['msg'] = "Data Inserted Successfully";

        } else {

            $response['status'] = "FAIL";
            $response['msg'] = "Data Can not be Inserted";

        }

        echo json_encode($response);
    }

    if(
        isset($_POST["name"]) and 
        isset($_POST["address"]) and 
        isset($_POST['city']) and
        isset($_POST["state"]) and
        isset($_POST["pin"]) and 
        isset($_POST["bgroup"]) and
        isset($_POST["contact"]) and
        isset($_POST["password"])
    ) {

        register($_POST["name"], $_POST["address"], $_POST["city"], $_POST["state"], 
        $_POST["pin"], $_POST["bgroup"], $_POST["contact"], $_POST["password"]);

        

    } else {

        $response["status"] = "FAIL";
        $response["msg"] = "No Field Should Be Left Blank";

        echo json_encode($response);

    }


    require("../../dbClose.php");
?>