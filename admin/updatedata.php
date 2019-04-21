<?php

	include('../dbcon.php');
	$id = $_POST['id'];
	$rollno = $_POST['rollno'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$p_cont = $_POST['p_cont'];
	$standard = $_POST['standard'];
	$id = $_POST['sid'];
	$imagename = $_FILES['image']['name'];
	$tempname = $_FILES['image']['tmp_name'];
	
	move_uploaded_file($tempname,"../images/$imagename");
	
	$query = "UPDATE `student` SET `id`='$id',`rollno`='$rollno',`name`='$name',`city`='$city',`P_contact`='$p_cont',`standard`='$standard',`image`='$imagename' WHERE id='$id'";
	
	$run = mysqli_query($con,$query);
	if($run == true)
	{ 
		?>
			<script>
				alert('Data updated Successfully');
				window.open('updateform.php ? sid= <?php echo $id; ?>','_self');
			</script>
		<?php
	}
	else
	{
		echo "Error !";
	}

?>