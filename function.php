<?php

function showdetails($standard,$rollno)
{
	include('dbcon.php');
	
	$query = "SELECT * FROM `student` WHERE `rollno`='$rollno' AND `standard`='$standard'";
	
	$run = mysqli_query($con,$query);
	
	if(mysqli_num_rows($run)>0)
	{
		$data = mysqli_fetch_assoc($run);
		?>
		<table border="1" align="center" bgcolor="yellow">
			<tr>
				<th colspan="3">Student Details</th>
			</tr>
			
			<tr>
				<td rowspan="5"> <img src = "images/<?php echo $data['image'];?>" style="max-height:200px; max-width:150px" /></td>
				<th>Roll no</th>
				<td align="center"><?php echo $data['rollno']; ?></td>
			</tr>
			
			<tr>
				<th>Name</th>
				<td align="center"><?php echo $data['name']?></td>
			</tr>
			
			<tr>
				<th>City</th>
				<td align="center"><?php echo $data['city']?></td>
			</tr>
			
			<tr>
				<th>Parents Contact</th>
				<td align="center"><?php echo $data['P_contact']?></td>
			</tr>
			
			<tr>
				<th>Standard</th>
				<td align="center"><?php echo $data['standard']?></td>
			</tr>
		</table>
		<?php
    }
	else
	{
		echo "<script>alert('No student Found.');</script>";
	}
}
?>