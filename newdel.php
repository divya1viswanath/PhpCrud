<?php	
	$con=mysqli_connect('localhost','root','','phpdatabase');
	$id=$_GET['id'];
	$delete="DELETE student,book FROM student INNER JOIN book ON student.id=book.id WHERE student.id='".$id."'";
	$result=mysqli_query($con,$delete);
	echo"successfully deleted";
	header("location:newsel.php");
?>
