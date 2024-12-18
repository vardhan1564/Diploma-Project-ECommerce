<?php 
include "db_connection.php";
session_start();
$email=$_SESSION['username'];
$qry="select * from users where email='$email'";

$qry1=mysqli_query($conn,$qry);
$qry2=mysqli_fetch_row($qry1);
$userid=$qry2[0];

$qry5="DELETE FROM cart WHERE userid = '$userid'";
$qry4=mysqli_query($conn,$qry5);
session_destroy();

header("Location: index.php");
?>