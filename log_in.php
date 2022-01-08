<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
 
   

}


  </style>
</head>
<body background="images/bg_images/14.jpeg">
	<?php
	include_once 'database.php';
	if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $password = $_POST['password'];
 
 $email_search = " select * from registration where email='$email'";
 $query = mysqli_query($con,$email_search);
 
 $email_count = mysqli_num_rows($query);
 if($email_count){
 	$email_pass = mysqli_fetch_assoc($query);
    $_SESSION['first'] = $email_pass['first']; 
    $_SESSION['last'] = $email_pass['last'];
    $_SESSION['state'] = $email_pass['state'];
    $_SESSION['city'] = $email_pass['city'];
    $_SESSION['contact'] = $email_pass['contact'];
 	$db_pass = $email_pass['password'];
 	$pass_decode = password_verify($password, $db_pass);
 	if($pass_decode){
  
 		echo "login successful";
 		?>
 		<script>
 			location.replace("tomorrow.html");
 		</script>
 		<?php
 	}else{

 		echo "password incorrect";
 	}
 	}else{
 		echo "invalid email";
 	
 }
 }

	?>

<form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-7">
      <label for="inputPassword4">Password</label> 
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
    </div>
    <br>

    <div class="form-group col-md-8">
  <button type="submit" name="submit" class="btn btn-primary">log in</button>
  <p style="color: white;">Don't Have Account<a href="registration.php">Create account</a></p>
</div>
</form>
</body>
</html>