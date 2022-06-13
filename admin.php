<? php 
	
// Create connection
// $conn = mysqli_connect('sql308.epizy.com','epiz_29385061','2D841RZAfhhli','epiz_29385061_mahim');




// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//write query for all users
$sql = 'SELECT * FROM users';

//make query & get result 
$result = mysqli_query($conn,$sql);

//fetch the resulting rows as an array
// $users = mysqli_fetch_all($result,MYSQLI_ASSOC);


?> 



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Admin Panel</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/admin.css"> -->
	<link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">

</head>
<body>
	<h1 class="title">User Data</h1>
	<div class="table">
		<table>
		  <tr>
		  	<th>ID</th>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Phone</th>
		    <th>Pass</th>
		  </tr>

		  <?php
		  $conn = mysqli_connect('sql308.epizy.com','epiz_29385061','2D841RZAfhhli','epiz_29385061_mahim');
			


			// Check connection
			if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}

			//write query for all users
			$sql = 'SELECT * FROM users';

			//make query & get result 
			$result = mysqli_query($conn,$sql);
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['ID']}</td>
              <td>{$row['Name']}</td>
              <td>{$row['Email']}</td>
              <td>{$row['Phone']}</td>
              <td>{$row['Pass']}</td> 
            </tr>\n";
          }
          mysqli_close($conn);
        ?>
		  
		</table>
		<!-- <?php mysql_close($conn); ?> -->
	</div>

</body>
</html>