<?PHP
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
<html>
<head>
    <title>Pagination</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
// This is our actual script.
$(document).ready(function(){
    $('#id').on('input', function(){
        $.ajax({
            url: "destination.php",
            type: 'post',
			data: {
				
				"id" : 1,
			},
            dataType: 'json',
            success: function (data) {
                alert(data)
            }
        });
    });
});
</script>
	<style>
		body{
			text-align:center;
			font-size:23;
		}
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
        
        mysqli_close($conn);
    ?>
    <ul class="pagination">
        <li><a href="?pageno=1">1</a></li>
       
        <li><a href="?pageno=2">2</a></li>  
		
        <li><a href="?pageno=3">3</a></li>       
        
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul></br>
	
	
<input type="text" id="id">

</body>
</html>