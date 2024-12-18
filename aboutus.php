<!DOCTYPE html>
<html lang="en">

<head>
	<style type="text/css">
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About us | Shoppers </title>
	<style>
		* {
			padding: 0;
			margin: 0;
			text-decoration: none;
			list-style: none;
			box-sizing: border-box;
		}

		body {
			font-family: montserrat;
		}

		nav {
			background: #0082e6;
			height: 80px;
			width: 100%;
		}

		label.logo {
			color: white;
			font-size: 35px;
			line-height: 80px;
			padding: 0 100px;
			font-weight: bold;
		}

		nav ul {
			float: right;
			margin-right: 20px;
		}

		nav ul li {
			display: inline-block;
			line-height: 80px;
			margin: 0 5px;
		}

		nav ul li a {
			color: white;
			font-size: 17px;
			padding: 7px 13px;
			border-radius: 3px;
			text-transform: uppercase;
		}

		a.active,
		a:hover {
			background: #1b9bff;
			transition: .5s;
		}

		.checkbtn {
			font-size: 30px;
			color: white;
			float: right;
			line-height: 80px;
			margin-right: 40px;
			cursor: pointer;
			display: none;
		}

		#check {
			display: none;
		}

		@media (max-width: 952px) {
			label.logo {
				font-size: 30px;
				padding-left: 50px;
			}

			nav ul li a {
				font-size: 16px;
			}
		}

		@media (max-width: 858px) {
			.checkbtn {
				display: block;
			}

			ul {
				position: fixed;
				width: 100%;
				height: 100vh;
				background: #2c3e50;
				top: 80px;
				left: -100%;
				text-align: center;
				transition: all .5s;
			}

			nav ul li {
				display: block;
				margin: 50px 0;
				line-height: 30px;
			}

			nav ul li a {
				font-size: 20px;
			}

			a:hover,
			a.active {
				background: none;
				color: #0082e6;
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
			<li><a class="" href="index.php">Home</a></li>
			<li><a href="Products.php">Products</a></li>
			<li><a href="contact.php">Contact-US</a></li>
			<li><a href="aboutus.php">About-US</a></li>
			<li><a href="cart.php" class="logo"> <i class="fas fa-shopping-cart"></i>cart</a></li>


			<?Php
			if (isset($_SESSION['username'])) {
			?>
				<li><a href="logout.php">LOGOUT</a></li>
			<?php
			} else {
			?>
				<li><a href="logincopy.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>
			<?php		}
			?></li>
			<li><?php
				if (isset($_SESSION['username'])) {
					echo "<font color='white'>" . $_SESSION['username'];
				} else {
					//echo "<font color='white'>Please Login";
				}
				?>
			</li>


		</ul>
	</nav>




	<br>
	<div class="container" id="content">
		<img src="images/team2.jpg" height="350px" width="500px" style="float: left margin=" 5px";> &nbsp; &nbsp;
		<img src="images/team.jpg" height="350px" width="500px" style="float: left margin=" 15px" align="right" ;> &nbsp;
		<div class="row">
			<div class="col" align ="justify"><br>
				<h3><mark>WHO WE ARE</mark></h3><br>
				<p id="p1">Shoppers is a recognized leader in the ecommerce industry, with a steadfast commitment to success and a record of achievement that continues a tradition of delivering excellence.<br><br>The company was founded in 2020 by John Mcarty to ease the process of ordering various items. From those early days with just one employee,Shoppers now has more than 10000 employees, serving thousands of customers. <br><br>Shoppers is guided by four principles: customer obsession rather than competitor focus, passion for invention, commitment to operational excellence, and long-term thinking.<br><br>
				<h4><mark>Vision</mark></h4>To make the world a more stylish, colorful and happier place.<br><br>
				<h4><mark>Mission</mark></h4>We strive to offer our customers the lowest possible prices, the best available selection, and the utmost convenience.
				</p>
			</div>
			<div class="col" align="justify">
				<br>
				<h3><mark>BUILDING THE FUTURE</mark></h3><br>
				<p id="p1">We strive to have a positive impact on customers, employees, small businesses, the economy, and communities.<br><br> We are smart, passionate builders with different backgrounds and goals, who share a common desire to always be learning and inventing on behalf of our customers.<br><br>We follow the following intensive growth strategies to match our competitors:<br>
				<ul>
					<li>Market development:<br>Our Focus is on entry and growth in new markets.</li><br>
					<li>Market Penetration:<br>We aim to generate more revenue from markets where the company currently operates.</li><br>
					<li>Product Development:<br>Our goal is to develop and offer new products to gain higher revenues. </li><br>
					<li>Diversification:<br>Our objective is to achieve growth based on new business.</li><br>
				</ul>
				</p>
			</div>
		</div>
	</div>
	</div>
	<?php
	include "footer.php";
	?>
</body>

</html>