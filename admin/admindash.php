<?php

session_start();
if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('localhost: ../login.php');
	}
	

?>
<?php
include('header.php');

?>
<div height="25%" class="admin">
	
	<h4><a href="http://localhost/demophp/SMS/admin/logout.php" style="float:right; margin-right:30px; color:#fff; font-size:20px;">Logout</a></h4>
	<h1 align="center">Welcome to Admin Dash</h1>
	
</div>

<div class="dashboard ">
<h2 align="right"><a href="http://localhost/demophp/SMS/admin/createadmin.php">Create Admin</a></h2>
	<table align="center" width="50%" class="body_image">

		<tr>
			<td align="center">1.</td>
			<td align="center"> <a href="addstud.php"> Add Student Detail </a></td>
		</tr>
	
		<tr>
			<td align="center">2.</td>
			<td align="center"> <a href="deletestud.php"> Delete Student Detail </a></td>
		</tr>
	
		<tr>
			<td align="center">3.</td>
			<td align="center"> <a href="updatestud.php"> Update Student Detail </a></td>
		</tr>
	</table>
</div>
</body>
</html>