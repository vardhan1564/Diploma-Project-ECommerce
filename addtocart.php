<?php
include "db_connection.php";
session_start();
$username = $_SESSION['username'];

$qry = "select * from users where email='$username'";
$qry1 = mysqli_query($conn, $qry);
$qry2 = mysqli_fetch_row($qry1);
$userid = $qry2[0];

$query = "insert into cart(product_id,userid,product_quantity,product_name, product_price) values(" . $_POST['product_id'] . "," . $userid . ",1,'" . $_POST['product_name'] . "', " . $_POST['product_price'] . ")";

mysqli_query($conn, $query);
header('Location: cart.php');
