<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

	<?php 	include 'header.php'; ?>
<div class="container">
	<div class="row">


	
	<div class="col-md-4">
		

		<div class="mb-4"></div>

				<div class="card">
					<div class="card-header">
						<div class="card-title">Enter The Agent</div>
					</div>
					<div class="card-body">
						<form method="POST" action="insertAgent.php">

						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">N</span>
								</div>
								<input type="text" name="name" class="form-control" placeholder="Enter The Name's">
							</div>

							<div class="mb-4"></div>



						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">G</span>
								</div>
								<select class="form-control" name="gender">
									<option>Choice Gender</option>
									<option value="Male">Male</option>
									<option value="Female">Female</option>

								</select>
							</div>

							<div class="mb-4"></div>




						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">L</span>
								</div>
								<input type="text" name="location" class="form-control" placeholder="Enter The Location">
							</div>

							<div class="mb-4"></div>



							
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">U</span>
								</div>
								<input type="text" name="Username" class="form-control" placeholder="Enter The UserName">
							</div>

							<div class="mb-4"></div>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">P</span>
								</div>
								


						<input type="password" name="Password" class="form-control" placeholder="Enter The Password">

						<input type="hidden" name="status" value="Block">

																	
						

							</div>


						
					</div>

					<div class="card-footer">
						<button class="btn btn-primary btn-block" name="CreateAgent" type="submit">Create</button>
					</div>


					</form>


				</div>
<div class="mb-4"></div>

	</div>


<div class="col-md-6">

	<div class="mb-4"></div>
<?php include 'AgentDsplay.php'; ?>
				</div>






	</div>
</div>

	<?php 	include 'footer.php'; ?>

</body>
</html>