<?php
	$con=mysqli_connect('localhost','root','','phpdatabase');
	$sql="select * from book";
	$result=mysqli_query($con,$sql);
	
	echo"<table border='1'>";
		echo"<tr>";
			echo"<th>id</th>";
			echo"<th>bookname</th>";
			echo"<th>authorname</th>";
			echo"<th>price</th>";
			echo"<th>action</th>";
		echo"</tr>";	
	while($row= mysqli_fetch_array($result))
	{
		echo"<tr>";
			echo"<td>" .$row['id'] . "</td>";					
			echo"<td>" .$row['bookname'] . "</td>";
			echo"<td>" .$row['authorname'] . "</td>";
			echo"<td>" .$row['price'] . "</td>";
			echo"<td><a href='edit.php?id=" . $row['id']."'>edit" . "</a>|<a href='delete.php?id=" . $row['id']."'>delete" . "</a></td>";
		echo"</tr>";
	}
	echo"</table>";
 ?>
