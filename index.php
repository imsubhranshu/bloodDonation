<?php
    include("header.php");
    include("db.php");
?>

<?php 

$sql = "SELECT * FROM $table";

if(isset($_GET["data"])) {

  $data = $_GET["data"];
  
  
  if($data != "") {

    $sql = "SELECT * FROM $table WHERE bgroup like '$data' or name like '$data' or city like '$data'";

  }

}



$result = mysqli_query($con, $sql);

?>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SL.No</th>
      <th scope="col">Name</th>
      <th scope="col">City</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Contact Number</th>
    </tr>
  </thead>
  <?php if($result) {
      
      $sl = 1;
      $tot = mysqli_num_rows($result);
      if($tot>0) {
        while($row = mysqli_fetch_assoc($result)) {
            

  ?>
  <tbody>
      <tr>
        <th scope="row"><?php echo $sl ?></th>
        <td><?php echo $row["name"] ?></td>
        <td><?php echo $row["city"] ?>, <?php echo $row["state"] ?></td>
        <td><?php echo $row["bgroup"] ?></td>
        <td><a href="tel:+91<?php echo $row["contact"] ?>"><?php echo $row["contact"] ?></a></td>
      </tr>
  <?php
            $sl = $sl + 1;
        }
      } else {
  ?>

          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> No record matches your search.
            
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            
          </div>

  <?php        
      }
    }
  ?>
  </tbody>  
</table>



<?php include("dbClose.php"); ?>
<?php include("footer.php"); ?>



   