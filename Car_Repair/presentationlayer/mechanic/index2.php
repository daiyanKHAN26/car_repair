<?php include ('../../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>mechanic</title>
	<link rel="stylesheet"  href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 >car<span>repair</span></h1>
		<nav>
		


		
		<ul > 
			
		
			<li><a href="index2.php">MyInfo</a></li>
			<li><a href="mechanicapp.php">My Appointments</a></li>
			<li><a href=" searchuser.php">Search user</a></li>
			<li><a href="../../applicationlayer/mechanicuser.php">Logout</a></li>
			
			



	
			

		</ul>
		



	</nav>




</header>
<body >

	<div class="header" style="width: 15%;margin-top: 60px;color: white;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid;padding: 10px;margin-left:-4px   ">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="infop" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid ;background: white; border-radius: 10px 10px 10px 10px;">


 


<div class="contentP">


	<label>ID: <?php echo "" .isset($_SESSION['mechanicID']);?></label>

	 	   <br>
	 	   <br>
	 	   <label> Email : <?php echo $colD['email']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Name : <?php echo $colD['mechanicname']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Address : <?php echo $colD['Address']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Contact Number : <?php echo $colD['ContactNumber']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   <label> Specialized In : <?php echo $colD['category']; ?></label>
	 	   	 	   <br>
	 	   <br>
	 	   



	
        
           
	
</div>

  



 


</form>









	






</body>
</html>