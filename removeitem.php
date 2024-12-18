<?php
print_r($_POST);
include "db_connection.php";

$query = "delete from cart where id=$_POST[cart_id]";

mysqli_query($conn, $query);

header('Location: cart.php');
