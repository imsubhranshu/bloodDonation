<?php

require("configurations.inc.php");



$con = mysqli_connect($server, $host, $password, $db);

if(!$con) {
    die("Connection Error");
}

?>