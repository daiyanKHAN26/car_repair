<?php include '../../datalayer/bookserver.php '; ?>
<!DOCTYPE html>
<html>
<head>
	<title>mechanic</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>car<span>repair</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index2.php">My Info</a></li>
			<li><a href="mechanicapp.php">My Appointments</a></li>
			<li><a href=" searchuser.php">Search user</a></li>
			<li><a href="add.php">Add Description</a></li>
			<li><a href="../../applicationlayer/mechanicuser.php">Logout</a></li>



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1">My<span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>DATE</th>
		<th>userID</th>
		<th>userName</th>
		<th>userAddress</th>
		<th>userEmail</th>
		<th>userContactNumber</th>
		<th>License plate</th>

		

		</tr>
		<?php $sqlmech="SELECT  * FROM bookapp , users   WHERE mechID=('$mechanicprofile') AND  userID=UserID "  ;
		$resultmech=$mysqli->query($sqlmech);
		if(mysqli_num_rows($resultmech)>= 1){
			while ($rowmech=$resultmech->fetch_assoc()) {

				echo "<tr><td>".$rowmech["AppoID"]."</td><td>".$rowmech["Date"]."</td><td>"."</td><td>".$rowmech["UserID"]."</td><td>".$rowmech['Name']."</td><td>".$rowmech['Address']."</td><td>".$rowmech['Email']."</td><td>".$rowmech["ContactNumber"]."</td><td>".$rowmech["Bloodtype"]."</td></tr>";
			}


			echo "</table";
	


		}

		?>
		
	</table>





</body>
</html>

