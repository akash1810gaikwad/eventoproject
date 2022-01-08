<?php
session_start();
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  
  
  <style type="text/css">
    *{
      top: 20px;
   font-family: 'Cairo', sans-serif;

    }
    
    label{
      background:#D0D3D4 ;
     

    }
    label:hover
    {
background:  #AF7AC5 ;
  border-radius: 4px;
  padding: 5px 10px;
    }
    

    body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
widows: 50%;
position: absolute;
top: 48%;
left: 50%;
transform: translate(-50%,-50%);
 
}

  </style>
</head>
<body background="images/bg_images/14.jpeg">
<?php
include_once 'database.php';
  if(isset($_POST['submit'])){
  $first =  mysqli_real_escape_string($con, $_POST['first']);
  $last =  mysqli_real_escape_string($con, $_POST['last']);
  $email =  mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $contact = mysqli_real_escape_string( $con, $_POST['contact']);
  $city =  mysqli_real_escape_string($con, $_POST['city']);
  $state =  mysqli_real_escape_string($con, $_POST['state']);

$pass = password_hash($password, PASSWORD_BCRYPT);
$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
$emailquery = " select * from registration where email='$email'";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);
if($emailcount>0){
  ?>
<script>
  alert("password are not matching");

</script>
<?php

}else{
  if($password === $cpassword){
    $insertquery = "insert into registration( first, last, email, password, cpassword, address, contact, city, state) values ('$first','$last','$email','$pass','$cpass','$address','$contact','$city','$state')";
    $iquery = mysqli_query($con, $insertquery);
    if($iquery){
  ?>
  <script>
    alert("insert successful");
  </script>
<?php
}else{


?>
<script>
  alert("no insert");

</script>
<?php
}
    

  }else{
    ?>
<script>
  alert("password are not matching");

</script>
<?php
}
}
}
?>
<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">First name</label>
      <input type="text" class="form-control" id="inputname" name="first" placeholder="first name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputlast">Last name</label>
      <input type="text" class="form-control" id="inputlast" name="last" placeholder="last name" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label> 
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password</label> 
      <input type="password" class="form-control" name="cpassword" id="inputPassword4" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6">
    <label for="inputcontact">Phone Number</label>
    <input type="text" class="form-control" id="inputcontact" name="contact" placeholder="contact" required>
  </div>
  </div>
  <br>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St" required>
  </div>
  <div class="form-row">
      <div class="form-group col-md-4">
      <label for="inputState" required>State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>Haryana</option>
        <option>Goa</option>
        <option>Himachal Pradesh</option>
          <option>Punjab</option>
        <option>Maharashtra</option>
        <option>Tamil Nadu</option>
          <option>Andhra Pradesh</option>
        <option>Karnataka</option> 
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputCity"> City </label>
      <input type="text" class="form-control" id="inputCity" name="city" required>
    </div>
  
    
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <br><label class="form-check-label" for="gridCheck">
        <a href="privacy_policy.html">Check me out</a> 
      </label>
    </div> 
    <br><br>
  <button type="submit" name="submit" class="btn btn-primary">Sign in</button>

 <p style="color: white;">already log in <a href="log_in.php">log in</a></p>
</form>

</body>
</html>
