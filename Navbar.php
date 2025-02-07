<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>NAVBAR </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<style>
		*{
		  padding: 0;
		  margin: 0;
		  text-decoration: none;
		  list-style: none;
		  box-sizing: border-box;
		}
		body{
		  font-family: montserrat;
		}
		nav{
		  background: #0082e6;
		  height: 80px;
		  width: 100%;
		}
		label.logo{
		  color: white;
		  font-size: 35px;
		  line-height: 80px;
		  padding: 0 100px;
		  font-weight: bold;
		}
		nav ul{
		  float: right;
		  margin-right: 20px;
		}
		nav ul li{
		  display: inline-block;
		  line-height: 80px;
		  margin: 0 5px;
		}
		nav ul li a{
		  color: white;
		  font-size: 17px;
		  padding: 7px 13px;
		  border-radius: 3px;
		  text-transform: uppercase;
		}
		a.active,a:hover{
		  background: #1b9bff;
		  transition: .5s;
		}
		.checkbtn{
		  font-size: 30px;
		  color: white;
		  float: right;
		  line-height: 80px;
		  margin-right: 40px;
		  cursor: pointer;
		  display: none;
		}
		#check{
		  display: none;
		}
		@media (max-width: 952px){
		  label.logo{
			font-size: 30px;
			padding-left: 50px;
		  }
		  nav ul li a{
			font-size: 16px;
		  }
		}
		@media (max-width: 858px){
		  .checkbtn{
			display: block;
		  }
		  ul{
			position: fixed;
			width: 100%;
			height: 100vh;
			background: #2c3e50;
			top: 80px;
			left: -100%;
			text-align: center;
			transition: all .5s;
		  }
		  nav ul li{
			display: block;
			margin: 50px 0;
			line-height: 30px;
		  }
		  nav ul li a{
			font-size: 20px;
		  }
		  a:hover,a.active{
			background: none;
			color: #0082e6;
		  }
		  #check:checked ~ ul{
			left: 0;
		  }
		}
		
	</style>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Shoppers </label>
      <ul>
        <li><a class="" href="index.php"> <i class="fas fa-home"></i>Home</a></li>
        <li><a href="Products.php">Products</a></li>

        <li><a href="aboutus.php">About-US</a></li>
		<li><a href="cart.php" class="logo" > <i class="fas fa-shopping-cart"></i>cart</a></li>
		
		
		<?Php
		if(isset($_SESSION['username']))
		{
			?>
		<li><a href="logout.php">LOGOUT</a></li>
		<?php
		}
		else
		{
	?>
			<li><a href="logincopy.php"> <i class="fa fa-user" aria-hidden="true"></i> LOGIN</a></li>
			<?php		}
		?></li>
		<li><?php
		if(isset($_SESSION['username']))
		{
			echo "<font color='white'>".$_SESSION['username'];
		}
		else
		{
			//echo "<font color='white'>Please Login";
		}
		?>
		</li>
		
        
      </ul>
    </nav>
    
  </body>