<?php include("../../db.php"); ?>
<?php session_start(); ?>

<?php

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

        $sql = "UPDATE $table set 'name' = '$name', 'address' = '$address', 'city' = '$city', 'state' = '$state', 'pin' = '$pin', 'bgroup' = '$bgroup', 'contact' = '$contact', 'password' = '$password'";

        // INSERT INTO $table(`name`, `address`, `city`, `state`, `pin`, `bgroup`, `contact`, `password`) VALUES ('$name', '$address', '$city', '$state', '$pin', '$bgroup', '$contact', '$password')

        echo $sql;

        $result = mysqli_query($con, $sql);

?>

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
        if($result) {
?>
            <div class="alert alert-success" role="alert">
                Record updated succesfully! Visit <a href="<?php echo $homepage; ?>">Homepage</a>
            </div>
<?php
        } else {
?>
            <div class="alert alert-warning" role="alert">
                Couldnot update now. Please try again
            </div>
<?php
        }
    }
?>

    

    <button type="button" class="btn btn-danger mt-5">Delete Record</button>

    <form action="" method="POST" class="mt-3">

        <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" value="<?php echo $_SESSION["name"]; ?>" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
        <label for="exampleFormControlTextarea1">Address</label>
        <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" required><?php echo $_SESSION["address"]; ?></textarea>
        </div>

        <div class="form-group">
        <label for="city">City</label>
        <input type="text" name="city" class="form-control" aria-describedby="emailHelp" value="
        <?php echo $_SESSION["city"]; ?>" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
        <label for="city">State</label>
        <input type="text" name="state" class="form-control" aria-describedby="emailHelp" value="<?php echo $_SESSION["state"]; ?>" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
        <label for="city">PIN Code</label>
        <input type="text" name="pin" class="form-control" aria-describedby="emailHelp" value="<?php echo $_SESSION["pin"]; ?>" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>

        <div class="form-group">
        <label for="bgroup">Blood Group: </label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="A+" required>
                <label class="form-check-label" for="inlineRadio1">A+</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="B+">
                <label class="form-check-label" for="inlineRadio2">B+</label>
            </div>

            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="AB+">
                <label class="form-check-label" for="inlineRadio3">AB+</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="O+">
                <label class="form-check-label" for="inlineRadio3">O+</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="A-">
                <label class="form-check-label" for="inlineRadio3">A-</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="B-">
                <label class="form-check-label" for="inlineRadio3">B-</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="AB-">
                <label class="form-check-label" for="inlineRadio3">AB-</label>
            </div>
            
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="bgroup" value="O-">
                <label class="form-check-label" for="inlineRadio3">O-</label>
            </div>
        </div>



        <div class="form-group">
        <label for="contact">Contact Number</label>
        <input type="number" name="contact" class="form-control" value="<?php echo $_SESSION["contact"] ?>" required>
        </div>

        <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
        <input class="btn btn-primary" type="reset" value="Reset">

    </form>


<?php include("../../footer.php"); ?>
<?php include("../../dbClose.php"); ?>