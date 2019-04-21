<?php

session_start();
if(isset($_SESSION['uid']))
	{
		echo $_SESSION['uid'];
	}
	else
	{
		header('location:../login.php');
	}
	

?>
<?php
include('header.php');
include('titlehead.php');
?>

<form method="post" action="addstud.php" enctype="multipart/form-data">
<a href="http://localhost/demophp/SMS/admin/admindash.php">Previous Page</a>
	<table cellpadding="10" cellspacing="5" border="1" align="center" style="margin-top:50px" enctype="multipart/form-data">
		<tr>
			<td> Student Id </td>
			<td><input type="number" name="id" required="required"/></td>
		</tr>
		
		<tr>
			<td> Rollno </td>
			<td><input type="text" name="rollno" placeholder="Enter Rollno" required="required"/></td>
		</tr>
		
		<tr>
			<td> Full Name </td>
			<td><input type="name" name="name" placeholder="Enter your name" required="required"/></td>
		</tr>
		
		<tr>
			<td> City </td>
			<td><input type="text" name="city" placeholder="Enter your city" required="required"/></td>
		</tr>
		
		<tr>
			<td> Parents Contact </td>
			<td><input type="number" name="p_cont" placeholder="Enter your parent contact" required="required"/></td>
		</tr>
		
		
		
		<tr>
			<td> Standard </td>
			<td><input type="number" name="standard" required="required"/></td>
		</tr>
		 
		<tr>
			<td> Student Image </td>
			<td><input type="file" name="image" required="required"/></td>
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
	$id = $_POST['id'];
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$p_cont = $_POST['p_cont'];
	$standard = $_POST['standard'];
	$imagename = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];
	
	move_uploaded_file($tempname,"../images/$imagename");
	
	$query = "INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `P_contact`, `standard`, `image`) VALUES ('$id','$rollno','$name','$city','$p_cont','$standard','$imagename')";
	
	$run = mysqli_query($con,$query);

	if($run==TRUE)
	{
		?>	
			<script>
				alert('Data inserted Successfully');
			</script>
		
		
		<?php
	}
}

?>