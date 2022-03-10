<?php
	$connection=mysqli_connect('localhost','root','','phpdatabase');
	$sql="CREATE TABLE oneteam(id int primary key,cource varchar(40),faculty varchar(50))";
	$check=mysqli_query($connection,$sql);
	$insert="INSERT INTO oneteam VALUES(1,'PHP','Sinu')";
	$checkinsert=mysqli_query($connection,$insert);
	$update="UPDATE oneteam set faculty='Elson' where id=1";
	mysqli_query($connection,$update);
	$deletes=mysqli_query($connection,"DELETE FROM oneteam WHERE id=1");
	echo $checkdelete;
	?>