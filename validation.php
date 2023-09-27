<?php 	

session_start();

include 'connection.php';


if (isset($_POST['LoginManager'])) {
	# code...



	 $Username=$_POST['Username'];

	 $Password=$_POST['Password'];


	 	$select=mysqli_query($conn,"SELECT * from manage where Username='$Username' and Password='$Password'");


	 	$row=mysqli_num_rows($select);

	 	if ($row>0) {
	 		# code...

	 		$_SESSION['UsernameManager']=$Username;

	 		header('location:home.php');
	 	}

	 	else{
	 		echo "Incorrent Password";
	 		echo "<br>";
	 		echo "<a href='LoginManager.php'>[Back]</a>";
	 	}



}


if (isset($_POST['AgentLogin'])) {
	# code...

	$UsernameAgent=$_POST['Username'];

	$PasswordAgent=$_POST['Password'];




	$select=mysqli_query($conn,"SELECT * FROM angent where username='$UsernameAgent' and password='$PasswordAgent' ");

	while ($data=mysqli_fetch_array($select)) {
		# code...
		$Status=$data['status'];

		$Name=$data['agentNames'];

	}
	$row=mysqli_num_rows($select);
	if ($row<=0) {
		# code...

		echo "Try Again";
		echo "<br>";
	 	echo "<a href='AgentLogin.php'>[Back]</a>";
	}

	else{
		if ($Status=='UnBlock') {
			# code...
			echo "Your Blocked";
			echo "<br>";
	 	echo "<a href='AgentLogin.php'>[Back]</a>";
		}

		else{

			$_SESSION['agentNames']=$Name;
			$_SESSION['UsernameAgent']=$UsernameAgent;

			header('location:HomeAgent.php');
		}
	}
	



}









 ?>