<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>car<span>repair</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href=" cancel.php">Cancel Booking</a></li>
			<li><a href="searchmechanic.php">Search mechanic</a></li>
			<li><a href="../../applicationlayer/mechanicuser.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	
<form method="post" action="searchmechanic.php">

	<?php include ('../../datalayer/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold;">Search By:<br>-mechanic ID<br>-mechanic Name<br>-category</label>
		<input type="text" name="dID" >

	</div>

	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['Search'])) {

         ?>	<table class="table2">
		<tr>
		<th>mechanic ID</th>
		<th>mechanic Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Category</th>

		</tr> <?php  


		$dID =$mysqli -> real_escape_string($_POST['dID']);

		$sql6="SELECT  * FROM  mechanic   WHERE 	mechanicname=('$dID') OR mechanicID=('$dID') OR category=('$dID')" ;
		$result6=$mysqli->query($sql6);
		if(mysqli_num_rows($result6)==1){
			while ($row6=$result6->fetch_assoc()) {

				echo "<tr><td>".$row6["mechanicID"]."</td><td>".$row6["mechanicname"]."</td><td>".$row6["Address"]."</td><td>".$row6["ContactNumber"]."</td><td>".$row6['category']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
				
	


</body>
</html>


