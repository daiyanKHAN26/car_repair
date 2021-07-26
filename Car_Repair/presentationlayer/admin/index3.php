<?php include ('../../datalayer/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css" type="text/css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>mechanic<span>user</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href="index3.php">Add/Delete Mechanic</a></li>
			<li><a href="viewmechanic.php">View Mechanics</a></li>
			<li><a href="viewusers.php">View users</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>

  			<li><a href="../../applicationlayer/mechanicuser.php">Logout</a></li>

			



	
			

		</ul>
		



	</nav>




</header>
<body>

<div class="headerA">
	<h2>Add mechanic</h2>
</div>

<form method="post" action="index3.php">

	<?php include ('../../datalayer/errors.php'); ?>

	<div class="input-groupA">
		<label>Mechanic ID</label>
		<input type="text" name="addID" >

	</div>


	<div class="input-groupA">
		<label>Mechanic Name</label>
		<input type="text" name="addname" >


	</div>

	<div class="input-groupA">
		<label>Address</label>
		<input type="text" name="addAddress">

	</div>

	<div class="input-groupA">
		<label>Contact Number</label>
		<input type="text" name="addContactNumber">


	</div>


	<div class="input-groupA">
		<label>Email address</label>
		<input type="text" name="addEmail">

	</div>

	<div class="input-groupA">
		<label>Password</label>
		<input type="text" name="addpassword">

	</div>
<div class="input-groupA">
	<label>Category</label>
	   	<select name="addcategory" class="xd">
	   		<option value="Engine" >Engine</option>
	   		<option value="Chassis">Chassis</option>
	   		<option value="Tire">Tire</option>
	   		<option value="Interior">Interior</option>
	   		<option value="Electronics">Electronics</option>  		


	   	</select>

	   	</select>
	</div>

	<div class="input-groupA">
		<button type="submit" name="Add" class="btnA">Add mechanic</button>
	</div>


	




</form>
	<div class="headerA">
	<h2>Delete mechanic</h2>
</div>

<form method="post" action="index3.php" class="delete">

	<div class="input-groupA">
		<label>mechanic ID</label>
		<input type="text" name="deleteID" >

	</div>

	<div class="input-groupA">
		<button type="submit" name="Delete" class="btnA">Delete</button>
	</div>

</form>





	

</body>
</html>