<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		Sign Up
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="css/sign_up.css"> -->
	<link rel="stylesheet" href="css/sign_up.css?v=<?php echo time(); ?>">



	<!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">


</head>
<body >

	<div class="reg">
		<h1 class="title">Enter Your Information</h1>

		<form action="success.php" method="post">
		  <h2>Registation Form</h2>
		  <div class="input-container">
		    <i class="ri-user-3-line icon"></i>
		    <input class="input-field" type="text" placeholder="Full Name" name="fname" required>
		  </div>

		  <div class="input-container">
		    <i class="ri-mail-line icon"></i>
		    <input class="input-field" type="text" placeholder="Email" name="email" required>
		  </div>

		  <div class="input-container">
		    <i class="ri-phone-fill icon"></i>
		    <input class="input-field" type="number" placeholder="Phone Number" name="phone" required>
		  </div>

		  <div class="input-container">
		    <i class="ri-lock-password-fill icon"></i>
		    <input class="input-field" type="password" placeholder="Password" name="pass" required>
		  </div>

		  <button type="submit" class="btn">Register</button>
		</form>


	</div>



</body>
</html>