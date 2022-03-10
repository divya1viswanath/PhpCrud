<?php
	session_start();
	if(isset($_POST['register'])){		
		$id = $_POST['id'];
		$username = $_POST['username'];
        $address = $_POST['address'];
        $place = $_POST['place'];
        $phno = $_POST['phno'];
        $password = $_POST['password'];
	    $con=mysqli_connect('localhost','root','','phpdatabase');
		$sql="INSERT INTO reg(username,address,place,phno,password) VALUES ('$username','$address','$place','$phno','$password')";
		$res=mysqli_query($con,$sql);
		header("location:loginsh.php");
	}
?>
<!doctype html>
	<html>
		<head>
			<style>
			body{
				text-align:center;
				font-size:25px;
			}
			</style>
		</head>
			<body>	
				<h2>ONLINE SHOPPING</h2>
				<form method="post" action="register.php">
				Name:<br>
					<input type="text" name="username" required >
					<br><br>
				Address:<br>	
					<input type="text" name="address" required>
					<br><br>
				Place:<br>	
					<input type="text" name="place" required>
					<br><br>
				Phone:<br>	
					<input type="text" name="phno" required>
					<br><br>
				Password:<br>	
					<input type="password" name="password" required>
					<br><br>
					<input type="submit" name="register" value="register">
				</form>
			</body>
		
	</html>