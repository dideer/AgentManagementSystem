<?php 	

include 'connection.php';


if (isset($_POST['CreateAgent'])) {
	# code...




 $name=$_POST['name'];
 $gender=$_POST['gender'];
 $location=$_POST['location'];
 $Username=$_POST['Username'];

  $password=$_POST['Password'];

$try=md5($password);




 $Password=$_POST['Password'];
 $status=$_POST['status'];



$insert=mysqli_query($conn,"INSERT into angent values('','$name','$gender','$location','$Username','$try','$status')");



if ($insert==true) {
	# code...

	echo "twagiye";
}
else{
	echo "urikunjya hehe wee";
}


}





if (isset($_POST['UpdateAgent'])) {
	# code...

 
 $agentId=$_POST['agentId'];
 $agentNames=$_POST['agentNames'];
 $Gander=$_POST['Gander'];
 $location=$_POST['location'];
 $username=$_POST['username'];
 $password=$_POST['password'];



$update=mysqli_query($conn,"UPDATE `angent` SET `agentNames` = '$agentNames',`Gander` = '$Gander',`location` = '$location',`username` = '$username',`password` = '$password' WHERE `agentId` = '$agentId'");

if ($update==true) {
	# code...

	echo "twagiye";

	include 'createAgent.php';
}
else{
	echo "urikujyahehe";
	include 'createAgent.php';

}

}




 ?>