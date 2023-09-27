<?php 

include 'connection.php';


$agentId=$_GET['agentId'];


$delete=mysqli_query($conn,"DELETE from angent where agentId='$agentId'");

if ($delete==true) {
	# code...

	echo "Byagiye";

	include 'CreateAgent.php';
}
else{
	echo "Byanze";

	include 'CreateAgent.php';
}




 ?>