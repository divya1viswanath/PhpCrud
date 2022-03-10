<?php
	session_start();	
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$username=$_POST['name'];
		$password=$_POST['password'];
		$con=mysqli_connect('localhost','root','','phpdatabase');
		$sql=("select * from reg where id='$id' and password='$password'");
		$result=mysqli_query($con,$sql);
		if($result){
			$count=mysqli_num_rows($result);
			if($count==1){
				$user=mysqli_fetch_assoc($result);
				$_SESSION ['id']=$user['id'];
				$_SESSION ['username']=$user['username'];
				$_SESSION ['password']=$user['password'];				
				header("location:homepage.php");
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
		<head>
		<h2> Login</h2>
		<style>
		body	{
				text-align:center;
				font-size:25px;
			}
			</style>
		</head>
		
		<body>
			
			<form action="loginsh.php" method="POST">	
				USER ID:<br>
				<input type="text" name="id" required>
				<br><br>
				PASSWORD:<br>
				<input type="password" name="password" required>
				<br><br><br>
				<input type="submit" value="submit" name="submit">

			</form>	
		</body>
	</html>