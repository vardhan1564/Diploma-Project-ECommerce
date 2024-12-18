<?php
require_once('db_connection.php');
?>
<?php
if(isset($_POST)){
	$name 		= $_POST['name'];
	$email 		= $_POST['email'];
	$phone	 	= $_POST['phone'];
	$message	= $_POST['message'];
	

	$sql = "INSERT INTO contactdetails (name, email, phone, message) VALUES(?,?,?,?)";
		$stmtinsert = $conn ->prepare($sql);
		$result = $stmtinsert->execute([$name, $email, $phone, $message]);
		
}else{
	echo 'No data';
}?>

<script>
	alert("Thanks For Contacting We will Reply Soon");
</script>
<?php
header('Location: index.php');
?>


