<?php 
session_start();
if(isset($_SESSION['id'])) {
	echo "hai ";
	echo  $_SESSION['name'];
    $con = mysqli_connect("localhost", "root", "", "login");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
				'id'=>$_GET["id"],
				'name'=>$_POST["name"],
				'price'=>$_POST["price"],
				'quantity'=>$_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>"location:profile1.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
				$sql = "SELECT * FROM product ORDER BY pid ASC";
				$result = mysqli_query($con, $sql);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="profile1.php"<?php echo $row["pid"]; ?>>
					
						

						<h4 type="text"><?php echo $row["name"]; ?></h4>

						<h4 type="text"> <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="text" name="name" value="<?php echo $row["name"]; ?>" />

						<input type="text" name="price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" />

					</div>
				</form>
			</div>
					<?php 
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="10%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="10%">Price</th>
						<th width="10%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["cart"]))
					{
						$total = 0;
						foreach($_SESSION["cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["name"]; ?></td>
						<td><?php echo $values["quantity"]; ?></td>
						<td><?php echo $values["price"]; ?></td>
						<td> <?php echo number_format($values["quantity"] * $values["price"], 2);?></td>
						<td><a href="profile1.php?action=delete&id=<?php echo $values["pid"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["quantity"] * $values["price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"> <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	</body>
</html>
