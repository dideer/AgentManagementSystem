<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<?php 

include 'connection.php';


	# code...


 $id=$_GET['agentId'];

	$select=mysqli_query($conn,"SELECT * FROM angent where agentId='$id'");

	while ($row=mysqli_fetch_array($select)) {
		# code...

		
?>


<body>

	<?php 	include 'header.php'; ?>
<div class="container">
	<div class="row">

		<div class="col-md-1"></div>
	
	<div class="col-md-4">
		
		<div class="mb-4"></div>

				<div class="card">
					<div class="card-header">
						<div class="card-title">Enter The Agent</div>
					</div>
					<div class="card-body">
						<form method="POST" action="insertAgent.php">
		<input type="hidden" name="agentId" value="<?php echo $row['agentId'] ?>" readonly>

						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">N</span>
								</div>
								<input type="text" name="agentNames" class="form-control" placeholder="Enter The Name's" value="<?php echo $row['agentNames'] ?>">
							</div>

							<div class="mb-4"></div>



						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">G</span>
								</div>
								<select class="form-control" name="Gander">
									<option>Choice Gender</option>
									<option <?php echo (@$_GET['agentId'] && ($row['Gander']=="Male"))? 'selected':''; ?> value="Male">Male</option>
									<option <?php echo (@$_GET['agentId'] && ($row['Gander']=="Female"))? 'selected':''; ?> value="Female">Female</option>

								</select>
							</div>

							<div class="mb-4"></div>




						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">L</span>
								</div>
								<input type="text" name="location" class="form-control" placeholder="Enter The Location" value="<?php echo $row['location'] ?>">
							</div>

							<div class="mb-4"></div>



							
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">U</span>
								</div>
								<input type="text" name="username" class="form-control" placeholder="Enter The UserName" value="<?php echo $row['username'] ?>">
							</div>

							<div class="mb-4"></div>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">P</span>
								</div>
								


						<input type="password" name="password" class="form-control" placeholder="Enter The Password" value="<?php echo $row['password'] ?>">

																	
						

							</div>


						
					</div>

					<div class="card-footer">
						<button class="btn btn-primary btn-block" name="UpdateAgent" type="submit">Update</button>
					</div>


					</form>


				</div>
<div class="mb-4"></div>


	</div>

<?php
	
		}



 ?>

<div class="col md-6 col-md-6">

	<div class="mb-4"></div>
<?php include 'AgentDsplay.php'; ?>
				</div>





	</div>
</div>

	<?php 	include 'footer.php'; ?>

</body>
</html>