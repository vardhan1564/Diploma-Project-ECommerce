<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---Fontawesome CDN Link-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!---Google Fonts--->
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!----Custom CSS Filw Link--->
  <link rel="stylesheet" href="style.css">
  <title>Shoppers</title>
</head>
<body>
<style>
  .container{
	  width:50%;
	  
  }
</style>

<body>
<?php 
include 'db_connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: .php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

  <!---Form Begins---->
  <section id="Form" method="post" action="success.php">
    <div class="container-fluid p-5 container">
      <form method="post" action="success.php">
        <div class="mb-3">
          <label for="InputEmail1" class="form-label">Email address</label>
          <input name="mail" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" name="Email">
          </div>
        <div class="mb-3">
          <label for="InputPassword" class="form-label">Password</label>
          <input name="pass" type="password" class="form-control" id="InputPassword" name="Pass">
        </div>
		<div class="d-grid gap-2">
			<button class="btn btn-secondary" type="button" value="Submit">Login</button>
		</div>
		<div id="emailHelp" class="form-text">&nbsp;<span style="color:red;">*</span>Don't have An Account? <a href="signUP.php" >Sign-UP </a>
		   
      </form>
    </div>
  </section>
  <!---Form End---->
</body>
</html>


