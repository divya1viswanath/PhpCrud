<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	$id=$_GET['id'];
	$sql=" SELECT student.id,student.name,student.place,student.address,book.bookname,book.authorname,book.price
	FROM student 
	INNER JOIN book
	ON student.id=book.id WHERE student.id='".$id."'";
	print_r($sql);
	$res=mysqli_query($con,$sql);
	$data=mysqli_fetch_array($res);
?>

<!doctype html>
<html>
	<head>
	</head>
	<body>
		<h2> Forms</h2>
			<form action="update.php" method="POST">
				<input type="hidden" name="id" required value="<?php echo $data['id'] ?>"/>
				Name:<br>
				<input type="text" name="name" required value="<?php echo $data['name'] ?>"/>
				<br>
				Place:<br>
				<input type="text" name="place" required value="<?php echo $data['place'] ?>"/>
				<br>
				Address:<br>
				<input type="tewsxt" name="address" required value="<?php echo $data['address'] ?>"/>
				<br>
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