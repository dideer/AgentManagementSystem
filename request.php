<?php 

include 'connection.php';



$RecordId=$_GET['RecordId'];


$select=mysqli_query($conn,"SELECT * FROM agentrecord where RecordId='$RecordId'");


while($row=mysqli_fetch_array($select)){

	$Request=$row['Request'];

}


if ($Request=='Delete') {
	# code...

	$update=mysqli_query($conn,"UPDATE agentrecord SET Request='Cancel' where RecordId='$RecordId' ");

	include 'HomeAgent.php';
}

else{

	$update=mysqli_query($conn,"UPDATE agentrecord SET Request='Delete' where RecordId='$RecordId' ");

	include 'HomeAgent.php';

}



 ?>