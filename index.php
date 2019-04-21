<!doctype>
<html lang"en_US">
	<head>
		<meta charset="UTF-8">
		<title> Student management system </title>
	</head>
	<body background="images/student.jpg">
		<h3 align="right"> <a href="login.php"> Admin Login </a> </h3>
		<h1 align="center" style="color:red">Welcome to Student Management System</h1>
		<form method="post" action="index.php">
			<table border="1" align="center" style="width:40%;" >
				<tr>
					<td align="center" colspan="2" style="color:white"> Student Information</td>
				</tr>
			
				<tr>
					<td style="color:white">Choose Standerd</td>
					<td>
						<select name="std" required="required">
							<option value="1">1st</option>
							<option value="2">2nd</option>
							<option value="3">3rd</option>
							<option value="4">4th</option>
							<option value="5">5th</option>
							<option value="6">6th</option>
							<option value="7">7th</option>
							<option value="8">8th</option>
							<option value="9">9th</option>
							<option value="10">10th</option>
						</select>
					</td>
				</tr>
			
				<tr>
					<td style="color:white"> Enter Rollno </td>
					<td> <input type="number" name="rollno" required="required"/></td>
				</tr>
				
				<tr>
					<td colspan="2" align="center"> <input type="submit" name="submit" value="submit"/> </td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$standard = $_POST['std'];
	$rollno = $_POST['rollno'];
	
	include('dbcon.php');
	include('function.php');
	
	showdetails($standard,$rollno);;
}


?>