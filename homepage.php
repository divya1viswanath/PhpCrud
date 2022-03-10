<?php
	session_start();
	if(isset($_SESSION['id'])){
		
		$con=mysqli_connect('localhost','root','','phpdatabase');
	?>	
	<!doctype html>
	<html>
		<head>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<title>mi-india</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="styles.css">
		</head>
		<body>
			<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<b class="navbar-brand; span"><?php echo "HAI  ";
				echo $_SESSION['username'];?></b>	
			</div>	
			<b class="nav navbar-nav navbar-right">
			<input type="submit" value="cart" name="cart"/>
			<button> <a href="clogout.php">LOGOUT</a> </button>
		</div>
		</nav>
		</body>
	</html>
	<?php
	}	
	
?>