<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	$id=$_GET['id'];
	$sql="SELECT * FROM book WHERE ID='$id'";
	$result=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($result);
?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
		<h2> Forms</h2>
			<form action="update.php" method="POST">
				<input type="hidden" name="id" required value="<?php echo $data['id'] ?>"/>
				Bookname:<br>
				<input type="text" name="bookname" required value="<?php echo $data['bookname'] ?>"/>
				<br>
				Authorname:<br>
				<input type="text" name="authorname" required value="<?php echo $data['authorname'] ?>"/>
				<br>
				Price:<br>
				<input type="text" name="price" required value="<?php echo $data['price'] ?>"/>
				<br>
				<br>
				<input type="submit" value="submit" name="edit"/>
			</form>
	</body>
</html>