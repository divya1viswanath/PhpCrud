<?php
	session_start();
	
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$con=mysqli_connect('localhost','root','','phpdatabase');
		$sql=("select * from login where username='$username' and password='$password'");
		$result=mysqli_query($con,$sql);
	}
?>
<!doctype html>
	<html>
		<body>
			<h2> Login</h2>
			<form action="ll.php" method="POST">
				USER:<br>
				<input type="text"  name="username" required/>
				<br><br>
				PASSWORD:<br>
				<input type="text" name="password" required/>
				<br>
				<br>
				<br>
				<input type="submit" value="submit" name="submit"/>

			</form>	
		</body>
	</html>