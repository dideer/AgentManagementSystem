
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
                <th>Price</th>
                <th>Agent Name</th>
                <th>Delete</th>
             
            </tr>
            </thead>





<?php 	include "connection.php" ?>


<?php 


		$select=mysqli_query($conn,"SELECT * FROM `agentrecord`");


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
					<td><button class="btn btn-success btn-link" name="dlt"><a href="request.php?RecordId=<?php echo $row['RecordId']; ?>"><?php echo $row['Request']; ?></a></button></td>
				</tr>

				<?php
			}
		}


	 ?>
            
   		 </table>


