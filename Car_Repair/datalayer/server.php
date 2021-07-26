<?php 


session_start();
$errors=array();

$mysqli = new mysqli("localhost","root","","registration");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}




if (isset($_POST['Register'])) {

	



	$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
	$Username 	= $mysqli -> real_escape_string($_POST['Name']);
	$Address 	= $mysqli -> real_escape_string($_POST['Address']);
	$ContactNumber	 = $mysqli -> real_escape_string($_POST['ContactNumber']);
	$Email 		=  $mysqli -> real_escape_string($_POST['Email']);
	$Password 	= $mysqli -> real_escape_string($_POST['password']);
	$licenseplate 	= $mysqli -> real_escape_string($_POST['licenseplate']);
    
   




	if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}

if (empty($Username)) {
	array_push($errors,"UserName is required");
	# code...
}


if (empty($Address)) {
	array_push($errors,"Address is required");
	# code...
}

if (empty($ContactNumber)) {
	array_push($errors,"Contact Number is required");
	# code...
}


if (empty($Email)) {
	array_push($errors,"Email is required");
	# code...
}

if (empty($Password)) {
	array_push($errors,"Password is required");
	# code...
}

if (empty($licenseplate)) {
	array_push($errors,"license plate is required");
	# code...
}







if(count($errors)==0){


	$Password=md5($Password);

	$sql = "INSERT INTO  users (UserID, Name, Address, ContactNumber, Email, Password,licenseplate) VALUES ('$UserID','$Username','$Address','$ContactNumber','$Email','$Password','$licenseplate') ";
    
   


	if (!$mysqli -> query($sql)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
    
 
}
    if(move_uploaded_file($_FILES['']))


  $_SESSION['UserID']=$UserID;
  $_SESSION['success']="you are now logged in";
  header('location:../presentationlayer/user/index.php');


}
	


	# code...
}




if (isset($_POST['Login'])) {

		$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
		$Password 	= $mysqli -> real_escape_string($_POST['password']);
if (empty($UserID)) {
	array_push($errors,"UserID is required");
	# code...
}
if (empty($Password)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

		$Password=md5($Password);
		
	

	$query="SELECT * FROM users WHERE UserID=('$UserID')AND Password=('$Password')";
	$result=mysqli_query($mysqli,$query);
	if (mysqli_num_rows($result) ==1 )  {
	
	

	
	$_SESSION['UserID']=$UserID;
  	$_SESSION['success']="you are now logged in";
  header('location:../presentationlayer/user/index.php');
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


	# code...


if (isset($_GET['logout'])) {

	session_destroy();
	isset($_SESSION['UserID']);
	header('location:login.php');
	}


	if (isset($_GET['My info'])) {
	header('location:login.php');
	}



	$userprofile=isset($_SESSION['UserID']);
$query="SELECT * FROM users WHERE UserID=('$userprofile')";
 $result= mysqli_query($mysqli, $query);
 $col= mysqli_fetch_assoc($result);







		






 if (isset($_POST['Login2'])) {

		$mechanicID2	= $mysqli -> real_escape_string($_POST['mechanicID']);
		$mechanicPassword2= $mysqli -> real_escape_string($_POST['mechanicpassword']);
if (empty($mechanicID2)) {
	array_push($errors,"mechanic ID is required");
	# code...
}
if (empty($mechanicPassword2)) {
	array_push($errors,"Password is required");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryD="SELECT * FROM mechanic WHERE mechanicID=('$mechanicID2')AND password=('$mechanicPassword2')";
	$resultD=mysqli_query($mysqli,$queryD);
	if (mysqli_num_rows($resultD) ==1 )  {
	
	

	
	$_SESSION['mechanicID']=$mechanicID2;
  	$_SESSION['success']="you are now logged in";
  	header('location:../presentationlayer/mechanic/index2.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}




$mechanicprofile=isset($_SESSION['mechanicID']);
$querymechanic="SELECT * FROM mechanic WHERE mechanicID=('$mechanicprofile')";
 $resultmechanic= mysqli_query($mysqli, $querymechanic);
 $colD= mysqli_fetch_assoc($resultmechanic);


 if (isset($_GET['logout'])) {

	session_destroy();
	isset($_SESSION['UserID']);
	header('location:login.php');
	}




 if (isset($_POST['treatmentHistory'])) {
		  	header('../presentationlayer/user/myinfo.php');
			 ?>
		
         	<table class="table2" style="margin-top: -10px">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>
		<tr>
		<th>mechanicID</th>  ?>
		<th>mechanicName</th>
		<th>Treatment</th>
		<th>mechanic's Note</th>	


		</tr> 
		
	<?php  
		$sql11="SELECT  * FROM  description,mechanic WHERE descID=('$userprofile') AND mechanicIDdesc=mechanicID" ;
		$result11=$mysqli->query($sql11);
		if(mysqli_num_rows($result11)>=1){
			while ($row11=$result11->fetch_assoc()) {

				echo "<tr><td>".$row11['mechanicID']."</td><td>".$row11['mechanicname']."</td><td>".$row11['treatment']."</td><td>".$row11['Note']."</td></tr>";
			}


			echo "</table";
	


		}

	}



		  ?>

 </table>



<?php  

if (isset($_POST['Login3'])) {

		$adminID	= $mysqli -> real_escape_string($_POST['adminID']);
		$adminpassword= $mysqli -> real_escape_string($_POST['adminpassword']);
if (empty($adminID)) {
	array_push($errors,"Admin ID is required");
	# code...
}
if (empty($adminpassword)) {
	array_push($errors,"Password is required");
	

		
	}


	if (count ($errors)== 0) {

	
		
	

	$queryA="SELECT * FROM admin WHERE AdminID=('$adminID')AND adminpassword=('$adminpassword')";
	$resultA=mysqli_query($mysqli,$queryA);
	if (mysqli_num_rows($resultA) ==1 )  {
	
	

	
	$_SESSION['AdminID']=$adminID;
  	$_SESSION['success']="you are now logged in";
  	header('location:../presentationlayer/admin/index3.php'); 
}  else{
		array_push($errors,"The ID/Password not correct");
		
	}
}
}


	

 if (isset($_POST['sendfeedback'])) {
 $feedback2	= $mysqli -> real_escape_string($_POST['feedx']);




$sqlfeed = "INSERT INTO  feedback (pID,feedback) VALUES ('$userprofile','$feedback2') ";

	if (!$mysqli -> query($sqlfeed)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);

}


 
}






 $mysqli -> close();



   
 ?>