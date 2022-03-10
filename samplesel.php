<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	if(isset($_POST['save'])) 
	{
		$bookname=$_POST['bookname'];
		$authorname=$_POST['authorname'];
		$price=$_POST['price'];
		$insert="insert into book(bookname,authorname,price) values('$bookname','$authorname','$price')";
		mysqli_query($con,$insert);
		header("location:select.php");
	}	
?>
<!doctype html>
	<html>
		<body>
			<h2> Forms</h2>
			<form action="samplesel.php" method="post">
				Bookname:<br>
				<input type="text" name="bookname" required/>
				<br>
				Authorname:<br>
				<input type="text" name="authorname" required/>
				<br>
				Price:<br>
				<input type="text" name="price" required/>
				<br>
				<br>
				<input type="submit" value="submit" name="save"/>

			</form>	
		</body>
	</html>