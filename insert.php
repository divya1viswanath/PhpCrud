<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	if(isset($_POST['save'])) 
	{
		$name=$_POST['name'];
		$place=$_POST['place'];
		$address=$_POST['address'];
		$bookname=$_POST['bookname'];
		$authorname=$_POST['authorname'];
		$price=$_POST['price'];
		
		$insert="INSERT INTO student(name,place,address) VALUES('$name','$place','$address')";
		$insert1="INSERT INTO book(bookname,authorname,price) VALUES ('$bookname','$authorname','$price')";

		mysqli_query($con,$insert);
		mysqli_query($con,$insert1);

	}	
?>
<!doctype html>
	<html>
		<body>
			<h2> Forms</h2>
			<form action="insert.php" method="POST">
				Name:<br>
				<input type="text" name="name" required/>
				<br>
				Place:<br>
				<input type="text" name="place" required/>
				<br>
				Address:<br>
				<input type="text" name="address" required/>
				<br>
				
				Bookname:<br>
				<input type="text" name="bookname" required/>
				<br>
				Authorname:<br>
				<input type="text" name="authorname" required/>
				<br>
				<br>
				Price:<br>
				<input type="text" name="price" required/>
				<br>
				<br>
				<input type="submit" value="submit" name="save"/>

			</form>	
		</body>
	</html>