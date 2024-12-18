<?php
require_once('db_connection.php');
?>
<?php
if(isset($_POST)){
	//$id			= $_POST['id'];
	$Fname 		= $_POST['Fname'];
	$Lname 		= $_POST['Lname'];
	$PhoneNo 	= $_POST['PhoneNo'];
	$Email	    = $_POST['Email'];
	$Address	= $_POST['Address'];
	$zip 		= $_POST['zip'];

		$sql = "INSERT INTO billing_details (Fname, Lname, PhoneNo, Email,Address ,zip ) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $conn ->prepare($sql);
		$result = $stmtinsert->execute([$Fname, $Lname, $PhoneNo, $Email,$Address, $zip]);
		
}else{
	echo 'No data';
}
?>
<?php
require_once 'FinalOrderConfirm.php';
?>

