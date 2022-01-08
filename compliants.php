<?php
include_once 'database.php';
$first = $_POST['first'];
	$email = $_POST['email'];
     $problem = $_POST['problem'];
	


$sql = "INSERT INTO sendmail (first, email, problem) values ('$first', '$email', '$problem');";
	            mysqli_query($con, $sql);
header("location:index.html");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
		<link rel="stylesheet" href="css/style.css">
			<script src="https://kit.fontawesome.com/2372d57b0f.js" crossorigin="anonymous"></script>
	 <script src="https://kit.fontawesome.com/d6f47c328b.js" ></script>
	
	<link href="css/main.css" rel="stylesheet">
<style>
	span{
		
		text-align: center;
	}
</style>


	
	 
</head>
<body bgcolor="#E6A00B">
	<center>
		<h1 style="font-size: 60px;">Thank you</h1>
		<i class="fab fa-opencart" style="font-size: 300px;" ></i>
<h3>
     <a href="index.html">BACK TO HOME</a><br>
     <a href="about_us.html">ABOUT US</a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="Terms_and_Conditions.html">Terms and Conditions</a>
     </h3>
     </center>

     <footer id="footer" >
     	
        <div class="container">
            <div class="text-center">
            	<div class="social-links">
                                   <a href="https://www.facebook.com/profile.php?id=100004462036990"><span class="fa fa-facebook"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <a href="https://twitter.com/AkashGaikwad_17"><span class="fa fa-twitter"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <a href="https://www.instagram.com/akash_mario/?hl=en"><span class="fa fa-instagram"></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <a href="https://youtu.be/hvIg3PTJWxs"><span class="fa fa-youtube"></span></a>
                               </div>
                <p> Copyright  &copy;2020<a target="_blank" href="index.html"> Evento </a>Theme. All Rights Reserved. <br> Designed by <a target="_blank" href="">Akash</a></p>                
            </div>
        </div>
    </footer>
  


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script >
		 swal("Good job!", "You clicked the button!", "success");
	</script>



</body>
</html>