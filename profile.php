<?php
	session_start();
	if(isset($_SESSION['userid'])){
		echo $_SESSION['name'];
		if(isset($_POST['edit'])){
			$con=mysqli_connect('localhost','root','','phpdatabase');
			$username=$_POST['username'];
			$password=$_POST['password'];
			$update=("update login set password='$password',username='$username' where id=".$_SESSION['userid']);
			$result=mysqli_query($con,$update);
		}	
	?>
	<!doctype html>
	<html>
		<body>
			<form action="profile.php" method="POST">
				
				NAME:<br>
				<input type="text" name="username" required value="<?php echo $_SESSION['name'] ?>"/>
				<br><br>
				PASSWORD:<br>
				<input type="text" name="password" required value="<?php echo $_SESSION['password'] ?>"/>
				<br>
				<br>
				<br>
				<input type="submit" value="edit" name="edit" />
			</form>
			<br>
			<br>
			<button> <a href="logout.php">LOGOUT</a></button>
			<br>
		</body>
	</html>	
	<?php 
		
	}
	else{
		header("location:login.php");
	}
	
	?>