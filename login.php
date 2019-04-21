<?php

session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash');
}

?>

<!doctype>
<html lang="en_US">
	<head>	
		<meta charset="UTF-8">
		<title>Admin Login</title>	
		<h2 align="right"><a href="http://localhost/demophp/SMS/admin/createadmin.php">Create Admin</a></h2>
	</head>
	<body background="images/student.jpg">
	
		<h2 align="center" style="margin-top: 50px; color:white ">Admin Login</h2>
		<form method="post" action="login.php">
			<table border="1" align="center">
				<tr>
					<td align="center" colspan="2" style="color:white"> Admin Information </td>
				</tr>
				
				<tr>
					<td style="color:white"> Admin name </td>
					<td> <input type="name" name="name" required="required"/> </td>
				</tr>
				
				<tr>
					<td style="color:white"> Password </td>
					<td> <input type="password" name="password" required="required"/> </td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"> <input type="submit" name="submit" value="Login"/> </td>
				</tr>
			</table>
		
		</form>
	
	</body>
</html>

<?php
include('dbcon.php');
if(isset($_POST['submit']))
{
	$username = $_POST['name'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
	$run = mysqli_query($con,$query);
	$row = mysqli_num_rows($run);
	if($row < 1)
	{
	
		
        ?>
			<script>
				alert('username or password is not match !!');
				window.open('login.php','_self');
			</script>
		<?php
	}
	else
	{
		$data = mysqli_fetch_assoc($run);
		
		$id = $data['id'];
		
		$_SESSION['uid']=$id;
		
		header('location:admin/admindash.php'); 
	}	
}
?>