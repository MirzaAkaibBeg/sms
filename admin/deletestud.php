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

?>

<table cellpadding="10" cellspacing="5" border="1" align="center">

<a href="http://localhost/demophp/SMS/admin/admindash.php">Previous Page</a>

	<form action="deletestud.php" method="post">
		<tr>
			<th> Enter Standard </th>
			<td><input type="number" name="standard" placeholder="Enter Standard" required="required"/></td>
		</tr>
		
		<tr>
			<th> Enter Name </th>
			<td><input type="name" name="name" placeholder="Enter Name" required="required"/></td>
		</tr>
		
		<tr>
			<td colspan="2" align="center"> <input type="submit" name="submit" value="Search"/> </td>
		</tr>
		
	</form>
</table>

<table border="1" align="center" width="80%" cellpadding="5" cellspacing="5">
	<tr bgcolor="red" color="yellow" align="center" ">
		<th>No</th>
		<th>Image</th>
		<th>id</th>
		<th>Name</th>
		<th>Rollno</th>
		<th>city</th>
		<th>P_contact</th>
		<th>standard</th>
		<th>Edit</th>
	</tr>
	
	<?php
	include('../dbcon.php');
	
	if(isset($_POST['submit']))
	{
		$standard = $_POST['standard'];
		$name = $_POST['name'];
		

		$query = "SELECT * FROM `student` WHERE standard='$standard' AND name LIKE '%$name%'";

		$run = mysqli_query($con,$query);

		if(mysqli_num_rows($run)<1)
		{
			echo "Data not found";
		}
		else
		{
			$count = 0;
		
			while($data = mysqli_fetch_assoc($run))
			{
				$count++;
				?>
			
				<tr align="center">
					<td> <?php echo $count ?> </td>
					<td> <img scr="../images/<?php echo $data['image'];  ?>" style="max-width:100px;" /> </td>
					<td> <?php echo $data['id']; ?> </td>
					<td> <?php echo $data['name']; ?> </td>
					<td> <?php  echo $data['rollno']; ?> </td>
					<td> <?php  echo $data['city']; ?> </td>
					<td> <?php  echo $data['P_contact']; ?> </td>
					<td> <?php  echo $data['standard']; ?> </td>
					<td><a href="deleteform.php ? sid=<?php echo $data['id']?>"> Delete </a></td>
				</tr>
			
				<?php
			}
		}
	}
	?>
</table>
   
