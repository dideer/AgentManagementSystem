<?php 

include 'connection.php';



$RecordId=$_GET['RecordId'];


$select=mysqli_query($conn,"SELECT * FROM agentrecord where RecordId='$RecordId'");


while($row=mysqli_fetch_array($select)){

	$Request=$row['Request'];

}


if ($Request=='Delete') {
	# code...

	echo "You are not Able to Delete ";
	include 'viewAgent.php';
}

else{

	$update=mysqli_query($conn,"DELETE FROM agentrecord where RecordId='$RecordId' and Request='Cancel'");

	include 'viewAgent.php';

}



 ?>
