<?php include("db.php"); ?>
<?php include("header.php"); ?>

<form action="registration.php" method="POST">

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>

  <div class="form-group">
    <label for="city">City</label>
    <input type="text" name="city" class="form-control" aria-describedby="emailHelp" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="city">State</label>
    <input type="text" name="state" class="form-control" aria-describedby="emailHelp" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="city">PIN Code</label>
    <input type="text" name="pin" class="form-control" aria-describedby="emailHelp" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  <div class="form-group">
    <label for="bgroup">Blood Group: </label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio1" value="A+" required>
            <label class="form-check-label" for="inlineRadio1">A+</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio2" value="B+">
            <label class="form-check-label" for="inlineRadio2">B+</label>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio3" value="AB+">
            <label class="form-check-label" for="inlineRadio3">AB+</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio3" value="O+">
            <label class="form-check-label" for="inlineRadio3">O+</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio3" value="A-">
            <label class="form-check-label" for="inlineRadio3">A-</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio3" value="B-">
            <label class="form-check-label" for="inlineRadio3">B-</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio3" value="AB-">
            <label class="form-check-label" for="inlineRadio3">AB-</label>
        </div>
        
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="bgroup" id="inlineRadio3" value="O-">
            <label class="form-check-label" for="inlineRadio3">O-</label>
        </div>
  </div>

  

  <div class="form-group">
    <label for="contact">Contact Number</label>
    <input type="number" name="contact" class="form-control" id="exampleInputPassword1" required>
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
  <input class="btn btn-primary" type="reset" value="Reset">

</form>


<?php include("footer.php"); ?>
<?php include("dbClose.php"); ?>