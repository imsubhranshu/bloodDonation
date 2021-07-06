<?php require("db.php"); ?>
<?php include("header.php"); ?>

<?php

    if(isset($_GET["ref"])) {
        $id = $_GET["ref"];

        $query = "SELECT name, address, city, state, pin, bgroup, contact FROM $table WHERE id = $id";

        $res = mysqli_query($con, $query);

        if($res) {
            while($row = mysqli_fetch_assoc($res)) {
                print_r($row);
            }
        }
    }
?>


<?php include("footer.php"); ?>
<?php include("dbClose.php"); ?>