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
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="searchmechanic.php ">Search mechanic</a></li>
			<li><a href="../../applicationlayer/mechanicuser.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	

	


	<div class="header">
	<h2>Book Appointment</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');?>





	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


	<div class="input-group">
		<label>Category</label>
	   	<select name="category" class="xd">
	   		<option value="Engine" >Engine</option>
	   		<option value="Chassis">Chassis</option>
	   		<option value="Tire">Tire</option>
	   		<option value="Interior">Interior</option>
	   		<option value="Electronics">Electronics</option>  		


	   	</select>	
	</div>





	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>











	<?php  
		$category;
	  if (isset($_POST['Search'])) {

	$category = mysqli_real_escape_string($mysqli,$_POST['category']);
	
	$query2="SELECT * FROM mechanic WHERE category=('$category')";
	$result2=mysqli_query($mysqli,$query2);
	?>
	
		<div class="input-group"> 

			<label>mechanic ID</label>
			

		<select class="input-group2" name="mechID">
			
	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		?>
		
	 
		<option> <?php echo $row2['mechanicID'] ?> </option>
		
	   
	  
	   <?php 

	} ?>
	 </select>
	 </div>


	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID" >

	</div>




	<div class="input-group">
		<label>Date</label>
		<input type="Date" name="Date">

	</div>


	 <div class="input-group">
			<button type="submit" name="Book" class="btn">BOOK</button>
			</div>
	 
	 <?php  
}


	    ?>








</form>





</body>

</html>