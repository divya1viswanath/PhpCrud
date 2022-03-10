<?php
	$con=mysqli_connect('localhost','root','','phpdb');
	if(isset($_POST['save']))
	{
		$Firstname=$_POST['firstname'];
		$Lastname=$_POST['lastname'];
		$qry="INSERT INTO `form`(`firstname`, `lastname`) VALUES ('$Firstname','$Lastname')";
		$update="update form set firstname='anjali',lastname='V.R' where id=3";
		mysqli_query($con,$update);
	}
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
		<form action="form.php" method="post">
			<p>First name:<input type="text" name="firstname"/><p>
			<p>Lastname:<input type="text" name="lastname"/><p>
			
			<input type="submit" value="submit" name="save"/>
		</form>
	</body>
</html>