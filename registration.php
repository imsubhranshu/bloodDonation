<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Blood Donation</title>
  </head>
  <body>
  <div class="container">

<?php 
require("db.php");

if(isset($_POST["name"])) {

    $name = $_POST["name"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pin = $_POST["pin"];
    $bgroup = $_POST["bgroup"];
    $contact = $_POST["contact"];
    $password = $_POST["password"];

    // echo $name;
    // echo $address;
    // echo $city;
    // echo $state;
    // echo $pin;
    // echo $bgroup;
    // echo $contact;
    // echo $password;

    $sql = "INSERT INTO $table(`name`, `address`, `city`, `state`, `pin`, `bgroup`, `contact`, `password`) VALUES ('$name', '$address', '$city', '$state', '$pin', '$bgroup', '$contact', '$password')";

    // echo $sql;

    $result = mysqli_query($con, $sql);

    if(!$result) {
?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry! Registration Denied.</strong> This could be because you are already registered. <a href="<?php echo $homepage ?>">Click here for homepage</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

<?php
    } else {

        header("location: /blooddonation/");

    }

}


include("footer.php");
require("dbClose.php");
?>

