<?php 

session_start();

$AgentName=$_SESSION['UsernameAgent'];
$Name=$_SESSION['agentNames'];


if (!isset($AgentName)) {

header('location:AgentLogin.php');
}else{

 ?>


 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>


<?php include 'AgentHeader.php'; ?>
	
<div class="container">
	<div class="row">


	
	<div class="col-md-4">
		

		<div class="mb-4">
						
			
		</div>

				<div class="card">


					<div class="card-header">
						<form method="POST" action="InsertRecord.php">
						<div class="card-title">Record From Agent 
								
							</div>

							<div class="alert alert-success"><?php echo $Name?></div>

						</div>
					<div class="card-body">

						
<input type="hidden" name="AgentUserName" value="<?php echo $AgentName ?>" class="form-control" readonly>
						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">C N</span>
								</div>
								<input type="text" name="ClientName" class="form-control" placeholder="Enter The Client's Name">
							</div>

							<div class="mb-4"></div>



					

							<div class="mb-4"></div>




						<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Kg</span>
								</div>
								<input type="number" name="Kg" class="form-control" placeholder="Enter The Kg">
							</div>

							<div class="mb-4"></div>



							
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">Q</span>
								</div>
								<input type="number" name="Quantity" class="form-control" placeholder="Enter The Quantity">
							</div>

							<div class="mb-4"></div>

							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">P</span>
								</div>
								


						<input type="number" name="Price" class="form-control" placeholder="Enter The Price">


																	
						<input type="hidden" name="Request" value="Delete">

							</div>


						
					</div>

					<div class="card-footer">
						<button class="btn btn-primary btn-block" name="RecordAgent" type="submit">Add Record</button>
					</div>


					</form>


				</div>
<div class="mb-4"></div>

	</div>


<div class="col-md-6">

	<div class="mb-4"></div>



	<?php 



	$Delete='Delete';


	 ?>




					<table class="table table-striped table-hover table-sm" >

						<thead  class="bg-dark text text-light">
      
            <tr>
                <th>Id</th>
                <th>Client's Names</th>
                <th>Kg</th>
                <th>Quantity</th>
                <th>Price (Frw)</th>
                <th>Agent Name</th>
                <th>Delete</th>
             
            </tr>
            </thead>





<?php 	include "connection.php" ?>


<?php 


		$select=mysqli_query($conn,"SELECT * FROM `agentrecord` where AgentUserName='$AgentName'");


		if (mysqli_num_rows($select)<0) {
			# code...

			echo "No Data In table";
		}
		else{

			while ($row=mysqli_fetch_array($select)) {
				# code...
				?>


				<tr>
					<td><?php echo $row['RecordId']; ?></td>
					<td><?php echo $row['ClientName']; ?></td>
					<td><?php echo $row['Kg']; ?></td>
					<td><?php echo $row['Quantity']; ?></td>
					<td><?php echo $row['Price']; ?></td>
					<td><?php echo $row['AgentUserName']; ?></td>
					<td><button class="btn btn-success btn-link" name="dlt"><a class="text text-light" href="request.php?RecordId=<?php echo $row['RecordId']; ?>"><?php echo $row['Request']; ?></a></button></td>
				</tr>

				<?php
			}
		}


	 ?>
            
   		 </table>




				</div>






	</div>
</div>

</body>
</html>




<?php
}

 ?>