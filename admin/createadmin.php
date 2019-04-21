<?php
include('header.php');
include('titlehead.php');
?>

<form method="post" action="createadmin.php" enctype="multipart/form-data">
  <a href="http://localhost/demophp/SMS/login.php">Previous Page</a>
	<table cellpadding="10" cellspacing="5" border="1" align="center" style="margin-top:50px" enctype="multipart/form-data">
	
		<h2 align="center"> Create Admin Account </h2>
		
		<tr>
			<td> Id </td>
			<td><input type="number" name="id_no" placeholder="Enter id" required="required"/></td>
		</tr>
	
		<tr>
			<td> User Name </td>
			<td><input type="name" name="name" placeholder="Enter username" required="required"/></td>
		</tr>
		 
		<tr>
			<td> Password </td>
			<td><input type="text" name="password" placeholder="Enter password" required="required"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit Info"/> </td>
		</tr>
		
	</table>
</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	include('../dbcon.php');
	$id	= $_POST['id_no'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	$query = "INSERT INTO `admin`(`id`, `username`, `password`) VALUES ('$id','$name','$password')";
	
	$run = mysqli_query($con,$query);
	
	if($run==TRUE)
	{
		?>	
			<script>
				alert('Account Created Successfully');
			</script>
		
		<?php
	}
}	
?>