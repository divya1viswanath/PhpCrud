<?php	
	$con=mysqli_connect('localhost','root','','phpdatabase');
	$id=$_GET['id'];
	$delete="DELETE FROM book WHERE id='$id'";
	$result=mysqli_query($con,$delete);
	echo"successfully deleted";
	header("location:select.php");
?>
