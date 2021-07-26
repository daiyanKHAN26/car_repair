<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mechanic</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Mechanic Login</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>Mechanic ID</label>
		<input type="text" name="mechanicID">

	</div>




	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="mechanicpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>

	
	




</form>

</body>
</html>