<?php 

include 'connection.php';

if (isset($_POST['RecordAgent'])) {
	# code...


	$AgentUserName=$_POST['AgentUserName'];
	$ClientName=$_POST['ClientName'];
	$Kg=$_POST['Kg'];
	$Quantity=$_POST['Quantity'];
	$Price=$_POST['Price'];
	$Request=$_POST['Request'];




	$insert=mysqli_query($conn,"INSERT into agentrecord values ('','$ClientName','$Kg','$Quantity','$Price','$AgentUserName','$Request')");


	if ($insert==true) {
		# code...
		echo "bymeye";
		include 'HomeAgent.php';
	}

	else{
		echo "Byanze";
		include 'HomeAgent.php';
	}


}







 ?>