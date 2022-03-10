<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	$sql=" SELECT student.id,student.name,student.place,student.address,book.bookname,book.authorname,book.price
	from student 
	INNER JOIN book
	on student.id=book.id";
	$res=mysqli_query($con,$sql);
	
	echo"<table border='1'>";
		echo"<tr>";
			echo"<th>id</th>";
			echo"<th>name</th>";
			echo"<th>place</th>";
			echo"<th>address</th>";
			echo"<th>bookname</th>";
			echo"<th>authorname</th>";
			echo"<th>price</th>";
			echo"<th>action</th>";
		echo"</tr>";	
	while($row= mysqli_fetch_array($res))
	{
		echo"<tr>";
			echo"<td>" .$row['id'] . "</td>";					
			echo"<td>" .$row['name'] . "</td>";
			echo"<td>" .$row['place'] . "</td>";
			echo"<td>" .$row['address'] . "</td>";
			echo"<td>" .$row['bookname'] . "</td>";
			echo"<td>" .$row['authorname'] . "</td>";
			echo"<td>" .$row['price'] . "</td>";
			echo"<td><a href='newedit.php?id=" . $row['id']."'>edit" . "</a>|<a href='newdel.php?id=" . $row['id']."'>delete" . "</a></td>";
		echo"</tr>";
	}
	echo"</table>";
 ?>
