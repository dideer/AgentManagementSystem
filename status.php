<?php 

include 'connection.php';


	# code...


 $id=$_GET['agentId'];

	$select=mysqli_query($conn,"SELECT * FROM angent where agentId='$id'");

	while ($row=mysqli_fetch_array($select)) {
		# code...

		

		 $status=$row['status'];

		
	}
 $status;

if ($status=='Block') {
	# code...

	$update=mysqli_query($conn,"UPDATE `angent` SET `status` = 'UnBlock' WHERE `agentId` = '$id'");

header('location:createAgent.php');
}


	# code...
else{

	$update=mysqli_query($conn,"UPDATE `angent` SET `status` = 'Block' WHERE `agentId` = '$id'");

	header('location:createAgent.php');

}





 ?>