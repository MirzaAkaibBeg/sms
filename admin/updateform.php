<?php
session_start();

if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location:../login.php');
}
 
?>

<?php
include('header.php');
include('titlehead.php');
include('../dbcon.php');

$sid = $_GET['sid'];

$query = "SELECT * FROM `student` WHERE id='$sid'";

$run = mysqli_query($con,$query);

$data = mysqli_fetch_assoc($run); 
?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
<a href="http://localhost/demophp/SMS/admin/admindash.php">Previous Page</a>
	<table cellpadding="10" cellspacing="5" border="1" align="center" style="margin-top:50px" enctype="multipart/form-data">
		<tr>
			<td> Student Id </td>
			<td><input type="number" name="id" value=<?php echo $data['id']; ?> required></td>
		</tr>
		
		<tr>
			<td> Rollno </td>
			<td><input type="text" name="rollno" value=<?php echo $data['rollno']; ?> required></td>
		</tr>
		
		<tr>
			<td> Full Name </td>
			<td><input type="name" name="name" value=<?php echo $data['name']; ?> required></td>
		</tr>
		
		<tr>
			<td> City </td>
			<td><input type="text" name="city" value=<?php echo $data['city']; ?> required></td>
		</tr>
		
		<tr>
			<td> Parents Contact </td>
			<td><input type="number" name="p_cont" value=<?php echo $data['P_contact']; ?> required></td>
		</tr>
		
		<tr>
			<td> Standard </td>
			<td><input type="number" name="standard" value=<?php echo $data['standard']; ?> required></td>
		</tr>
		 
		<tr>
			<td> Student Image </td>
			<td><input type="file" name="image" value=<?php echo $data['image']; ?> required="required"/></td>
		</tr>
		
		<tr>
			
			<td colspan="2" align="center">
			
			<input type="hidden" name="sid" value="<?php echo $data['id']; ?>" />
			<input type="submit" name="submit" value="Submit Info"/> </td>
		</tr>
		
	</table>
</form>
</body>
</html>