<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	$id=$_POST['id'];	
	$bookname=$_POST['bookname'];
	$authorname=$_POST['authorname'];
	$price=$_POST['price'];
	$update="UPDATE book SET bookname='$bookname',authorname='$authorname',price='$price' where id='$id'";
	mysqli_query($con,$update);
	echo"successfully updated";
	header("location:select.php");
?>
