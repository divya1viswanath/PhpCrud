<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	if(isset($_POST['btn'])) 
	{
		$lname=$_POST['lastname'];
		$fname=$_POST['firstname'];
		$qry="INSERT INTO names(lname,fname) VALUES('$lname','$fname')";
		$check=mysqli_query($con,$qry);
		header("location:listing.php");
	}
?>
<!DOCTYPE html>
<html>
<body>
<form action="index.php" method="post">
  First name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse">
  <br><br>
  <input type="submit" value="Submit" name="btn">
</form> 
</body>
</html>
