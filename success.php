<?php

// Create connection


$conn = mysqli_connect('sql111.epizy.com','epiz_29353211','ESr22mdT2N','epiz_29353211_mahim');
// $conn = mysqli_connect('sql308.epizy.com','epiz_29385061','2D841RZAfhhli','epiz_29385061_mahim');



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "..";

$name = $_POST['fname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$pass = $_POST['pass'];

// echo 'name: ', $name , 'email: ', $email , 'Phone: ',$phone , 'pass: ',$pass ;


$sql = "INSERT INTO users (Name, Email, Phone, Pass)
VALUES ( '$name', '$email' , '$phone' , '$pass' )";

if ($conn->query($sql) === TRUE) {
  echo "..";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>


ClA<UJgkm%#>_0y7


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>
		Form submittion successful
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="css/success.css"> -->
	<link rel="stylesheet" href="css/success.css?v=<?php echo time(); ?>">


</head>
<body>
	<h1 class="title"> 
		Your Registration Complete , <?php echo $_POST["fname"]; ?>
	</h1>
	<div class="button">
		<a class="btn" href="index.php">Home Page</a>
	</div>

</body>
</html>