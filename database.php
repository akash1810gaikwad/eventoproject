<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "database";

 $con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
 if($con){
 	?>
  <script>
  	alert("connection successful");
  </script>
<?php
}else{


?>
<script>
	alert("no connection");

</script>
<?php
}
?>





