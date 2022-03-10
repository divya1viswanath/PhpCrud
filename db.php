<?php
$con = mysqli_connect("localhost","root","","phpdatabase");
    if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
	}
	if (isset($_GET['pageno'])) {
		$pageno = $_GET['pageno'];
	} else {
		$pageno = 1;
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.pagination a {
	  color: black;
	  float: left;
	  padding: 8px 16px;
	  text-decoration: none;
	  transition: background-color .3s;
	}

	.pagination a.active {
	  background-color: dodgerblue;
	  color: white;
	}

	.pagination a:hover:not(.active) {background-color: #ddd;}
	</style>
	</head>
	<body>
	
    <?php

        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 3;
        $offset = ($pageno-1) * $no_of_records_per_page;

        $conn=mysqli_connect("localhost","root","","phpdatabase");
      
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM pagination_table";
        $result = mysqli_query($conn,$total_pages_sql);
		//print_r($total_pages_sql);
		//exit;
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM pagination_table LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data)){
			echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['name']."</td>
			<td>".$row['age']."</td>
			<td>".$row['dept']."</br></td>
			</tr>";
		}

	<div class="pagination">
	  <a href="#">&laquo;</a>
	  <a href="#">1</a>
	  <a class="active" href="#">2</a>
	  <a href="#">3</a>
	  <a href="#">4</a>
	  <a href="#">5</a>
	  <a href="#">6</a>
	  <a href="#">&raquo;</a>
	</div>

	</body>
</html>

		
		



