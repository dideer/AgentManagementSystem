
<?php 	
session_start();

$manager=$_SESSION['UsernameManager'];

if (!isset($manager)) {

header('location:LoginManager.php');
}else{
?>
	
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">



<span class="header">
	<div class="row bg-dark">
		
				<div class="col-md-12">
				<nav class="navbar">


		<div class="navbar-brand">
			<b class="text text-info">ESP GAS MIS</b><br>
			
		</div>	

						
						<ul class="nav  nav-pills nav-stacked" >
							<li class="nav-item"><a href="Home.php" class="nav-link text text-light">Home</a></li>
							<li class="nav-item"><a href="createAgent.php" class="nav-link text text-light">Create Agent</a></li>
							<li class="nav-item"><a href="ViewAgent.php" class="nav-link text text-light">View Record</a></li>
							<li class="nav-item"><a href="LogoutManager.php" class="nav-link text text-light">LogOut</a></li>

						</ul>	

					</nav>
				</div>
		


	</div>
	</span>


</div>
</body>
</html>

<?php
}

 ?>