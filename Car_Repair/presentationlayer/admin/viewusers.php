<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>mechanic<span>user</span></h1>
		<nav>
		


		
		<ul> 
			
		
		
			<li><a href="index3.php">Add/Delete mechanic</a></li>
			<li><a href="viewmechanic.php">View mechanics</a></li>
			<li><a href=" viewusers.php">View users</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>


			<li><a href="../../applicationlayer/mechanicuser.php">Logout</a></li>

			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">users Information</h1>
	<table class="table4">
		<tr>
		<th>user ID</th>
		<th>user Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>License plate</th>

		</tr>

		<?php $sql3="SELECT  * FROM  users " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["UserID"]."</td><td>".$row3["Name"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3['Email']."</td><td>".$row3['Licenseplate']."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>