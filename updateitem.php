<?php
print_r($_POST);
include "db_connection.php";

$new_prod_quantity = 1;

//fetch existing quantity

$fetchquery = "select product_quantity from cart where id = $_POST[cart_id]";
$result = $conn->query($fetchquery);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($_POST['type'] == 'increment')
		{
			$new_prod_quantity = $row['product_quantity'] + 1;
		}
		else {
			$new_prod_quantity = $row['product_quantity'] - 1;
			if($new_prod_quantity ==0)
			{
				$query = "delete from cart where id=$_POST[cart_id]";
				mysqli_query($conn, $query);
			}
		}
	}
}

$query = "update cart set product_quantity = $new_prod_quantity where id=$_POST[cart_id]";

mysqli_query($conn, $query);

header('Location: cart.php');