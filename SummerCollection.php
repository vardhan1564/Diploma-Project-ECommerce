<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!---Fontawesome CDN Link-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!---Font Awesome--->
  <script src="https://kit.fontawesome.com/e8b87d6469.js" crossorigin="anonymous"></script>

  <!---Google Fonts--->
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!----Custom CSS Filw Link--->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
  <title>Shoppers | Summer Collections </title>
</head>

<body>

  <!--- Navbar--->
  <section id="Navbar">
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo" id="tag">Shoppers</label>
      <ul>
        <li><a class="active" href="#Carousel">Home</a></li>
        <li><a href="Men.html">Products</a></li>
        <li><a href="aboutus.php">Reviews</a></li>
        <li><a href="Contact.html">Contact</a></li>
        <li class="nav-item"><button><i class="ti-shopping-cart"></i><span class="nav-shop__circle"></span></button> </li>
      </ul>
    </nav>
  </section>
  <!--- Navbar End--->

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
					$query = "select * from products where category='summercollection'";
					$result = $conn->query($query);

					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						// echo "id: " . $row["id"]. " - Name: " . $row["product_name"]. " " . $row["product_price"]. "<br>";
						?>
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6   product-item men">

                        <div class="product discount product_filter">
                          <div class="product_image">
                            <img src="images/allproducts/<?= $row["image"]?>" alt="">
                          </div>
                          <div class="favorite favorite_left"></div>
                          <div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-<?=$row['discount']?> %</span></div>
                          <div class="product_info">

                            <h6 class="product_name"><a href="single.html"><?php echo $row["product_name"];?></a></h6>
                            <div class="product_price">Rs <?= $row["product_price"]?><span>Rs <?= $row["product_actual_price"]?> </span></div>
                          </div>
                        </div>

                        <form action="addtocart.php" method="POST">
                          <input type="hidden" name="product_name" value="<?= $row["product_name"]?>" />
                          <input type="hidden" name="product_price" value="<?= $row["product_price"];?> " />
                          <input type="hidden" name="product_id" value="<?= $row["id"];?>" />
                          <input type="submit" name="submit_add_to_cart" value="Add to cart" class="red_button add_to_cart_button" />
                        </form>

                        <!-- <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div> -->

                      </div>
                      <?php
					  }
					} else {
					  echo "0 results";
					}
					
					  ?>
