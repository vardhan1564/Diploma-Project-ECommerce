<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kids Fashion </title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Colo Shop Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
  <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
  <link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="styles/categories_styles_kids.css">


</head>

<!---Navbar--->
<section class="#Navbar">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <h1 class="display-5 text-light">Shoppers</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
		  <a class="nav-link active" aria-current="page" href="Men.html">Products</a>
		  <a class="nav-link active" aria-current="page" href="Contact1.html">Contactus</a>
          
          <!--<a class="nav-link " href="#Footer">Contact Us</a>-->
        </div>
      </div>
    </div>
  </nav>
</section>
<!---Navbar End--->

<body>
  <section id="Product">
    <div class="super_container">
      <div class="container product_section_container">
        <div class=" product_section clearfix">
          <!-- Products -->
          <div class="container-fluid">
            <div class="row">
              <div class="products_iso">

                <!-- Product Grid -->

                <div class="product-grid">
                  <div class="row">
                    <!-- Product 1 -->
					
					<?php 
					include "db_connection.php";
					$query = "select * from products where category='traditional'";
					$result = $conn->query($query);

					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						// echo "id: " . $row["id"]. " - Name: " . $row["product_name"]. " " . $row["product_price"]. "<br>";
						?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6   product-item women">
					
                      <div class="product discount product_filter">
                        <div class="product_image">
                          <img src="images/traditional/<?= $row["image"]?>" alt="">
                        </div>
                        <div class="favorite favorite_left"></div>
                        <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-<?=$row['discount']?> %</span></div>
                        <div class="product_info">
                          <h6 class="product_name"><a href="single.html"><?php echo $row["product_name"];?></a></h6>
                          <div class="product_price">Rs <?= $row["product_price"]?><span>Rs <?= $row["product_actual_price"]?> </span></div>
                        </div>
                      </div>
					  <form action="addtocart.php" method="POST">
					  <input type="hidden" name="product_name" value="<?= $row["product_name"]?>"/>
					  <input type="hidden" name="product_id" value="<?= $row["id"];?>"/>
					  <input type="hidden" name="product_price" value="<?= $row["product_price"]?> "/>
					  <input type="submit" name="submit_add_to_cart" value="Add to cart" class="red_button add_to_cart_button"/>
					  </form>
					  
					  <!--<form action="buynow.php" method="POST">
					  <input type="hidden" name="product_name" value="<?= $row["product_name"]?>"/>
					  <input type="hidden" name="product_price" value="<?= $row["product_price"]?> "/>
					  <input type="submit" name="submit_buy_now " value="buy now " class="red_button add_to_cart_button"/>
					  </form>-->
					  
                      <!-- <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div> -->
						
                    </div>
						<?php
					  }
					} else {
					  echo "0 results";
					}
					
					  ?>
				</div>