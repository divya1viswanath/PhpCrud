<?php
	if (isset($_FILES['fileUpload'])){
	$path = "upload/";
	$target_file =  $path.basename($_FILES["fileUpload"]["name"]);
	$file=$_FILES['fileUpload']['name'];    
	$result = move_uploaded_file($_FILES['fileUpload']['tmp_name'],$target_file.$file);
		if ($result) {
			echo "file successfully uploaded";
		}
		else {
			echo "please select your file";
		}
	}
?>
<!doctype html>
<html>
	<head>
	</head>
	<body>
	<form action="fileup.php" method="post" enctype="multipart/form-data">
	  <input type="file" name="fileUpload" id="fileUpload">
	  <input type="submit" value="Upload	" name="submit">
	</form>
	</body>
</html>