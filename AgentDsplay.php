



					<table class="table table-striped table-hover table-sm" >

						<thead  class="bg-dark text text-light">
      
            <tr>
                <th>Id</th>
                <th>Names</th>
                <th>Gender</th>
                <th>Location</th>
                <th>UserName</th>
                <th>Password</th>
                <th>Status</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            </thead>





<?php 	include "connection.php" ?>


<?php 


		$select=mysqli_query($conn,"SELECT * FROM `angent`");


		if (mysqli_num_rows($select)<0) {
			# code...

			echo "No Data In table";
		}
		else{

			while ($row=mysqli_fetch_array($select)) {
				# code...
				?>


				<tr>
					<td><?php echo $row['agentId']; ?></td>
					<td><?php echo $row['agentNames']; ?></td>
					<td><?php echo $row['Gander']; ?></td>
					<td><?php echo $row['location']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['password']; ?></td>

					


					
					<td><a class="text text-dark" href="status.php?agentId=<?php echo $row['agentId']; ?>"><?php echo $row['status']; ?></a></td>
					<td><button class="btn btn-success btn-link"><a class="text text-light" href="UpdateAgent.php?agentId=<?php echo $row['agentId']; ?>">Update</a></button></td>
					<td><button class="btn btn-success btn-link"><a class="text text-light" href="DeleteAgent.php?agentId=<?php echo $row['agentId']; ?>">Delete</a></button></td>
					
				</tr>

				<?php
			}
		}


	 ?>
            
   		 </table>