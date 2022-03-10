<?php
	session_start();

	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$con=mysqli_connect('localhost','root','','phpdatabase');
		$sql=("select * from login where username='$username' and password='$password'");
		$result=mysqli_query($con,$sql);
		if($result){
			$count=mysqli_num_rows($result);
			if($count==1){
				$user=mysqli_fetch_assoc($result);
				$_SESSION ['userid']=$user['id'];
				$_SESSION ['name']=$user['username'];
				$_SESSION ['password']=$user['password'];
				header("location:profile.php");-
			}
			else{
				echo"invalid login<br>";
			}
		}
		else{
			echo"invalid login<br>";

		}
	}

?>

<!doctype html>
	<html>
		<body>
			<h2> Login</h2>
			<form action="login.php" method="POST">
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
