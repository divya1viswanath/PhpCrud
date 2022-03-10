<?php
	$con=mysqli_connect ('localhost','root','','phpdb');
	if (isset($_POST['save']))
	{
		$name=$_POST['name'];
		$address=$_POST['address'];
		$phno=$_POST['phno'];
		$qry="INSERT INTO crud(name,address,phno) VALUES ('$name','$address','$phno')";
		$deletes=mysqli_query($con ,"delete from crud where id=5");
		$update="update crud set name='sahana',address='saraswaty vilasam',phno='7521364895' where id=7";
		mysqli_query($con,$update);
		
	}
?>
<!doctype html>
<html>
	<body>
		<form action="crud.php" method="post">
			Name:<br>
			<input type="text" name="name" >
			<br>
			Address:<br>
			<input type="text" name="address" >
			<br>
			Phone number:<br>
			<input type="text" name="phno" >
			<br>			
			<input type="submit" value="Submit" name="save">
		</form>  
	</body>
</html>