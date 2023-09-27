<?php 	


session_start();
unset($_SESSION['UsernameAgent']);
header('location:AgentLogin.php');

 ?>