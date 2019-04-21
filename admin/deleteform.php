<?php

	include('../dbcon.php');
	
	$id = $_REQUEST['sid'];
	
	$query = "DELETE FROM `student` WHERE `id`='$id';";
	
	$run = mysqli_query($con,$query);
	if($run == true)
	{ 
		?>
			<script>
				alert('Data deleted Successfully');
				window.open('deletestud.php','_self');
			</script>
		<?php
	}
	else
	{
		echo "Error !";
	}

?>