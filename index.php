<html>
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
    <title>Shoppers</title>
</head>
<body>
<?php
require_once 'Navbar.php';
?>
<!--- Carousel--->
  <section id="Carousel">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active carousel_banner" data-bs-interval="3000">
          <img class="main_carousel_img img-fluid d-block w-100" src="images/slide/slide-1.jpg" class="d-block w-100" alt="Refresh...">
          <div class="car_txt carousel-caption d-none d-md-block">
            <h1 class="display-5 car_head">Summer Collections</h1>
            <h6>Get Upto <p class="d-inline-block" style="color:red;"> 40%-60%</p> Off</h6>
            <div class="shop_btn">
              <a href="Products.php">Shop now</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel_banner" data-bs-interval="3000">
          <img class="main_carousel_img img-fluid w-100 d-block" src="images/slide/slide-2.jpg" class="d-block w-100" alt="...">
          <div class="car_txt carousel-caption d-none d-md-block">
            <h1 class="car_head display-">Wardrobe Refresh Sale</h1>
            <h6>Shirts, Trousers & More</h6>
            <div class="shop_btn "><a href="product_list_accessories.php">Shop Now</a></div>
          </div>
        </div>
        <div class="carousel-item carousel_banner">
          <img class="main_carousel_img img-fluid w-100 d-block" src="images/slide/slide-3.jpg" alt="...">
          <div class="car_txt carousel-caption d-none d-md-block">
            <div class="col-auto">
              <h6 class="m-0">Spring / Summer Collection 2022</h6>
              <h1 class="car_head display-4">Get up to <p class="d-inline-block" style="color:red;">30% </p> Off on New Arrivals</h1>
              <div class="shop_btn "><a>Shop Now</a></div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!--- Carousel End--->
  <br>
  <!--- Category begins--->
  <section class="Category">
    <div class="row categories_row mx-auto">
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <img class="img-fluid w-100 " src="images/men.jpg">
        <div class="categories__text text-justify">
          <h4 class="display-6">Men’s fashion</h4>
          <p style="color:black">273 items</p>
          <a href="product_list_mens.php">Shop now</a>
          <div class="underline"></div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <img class="img-fluid w-100" src="images/kids.jpg">
        <div class="categories__text text-justify">
          <h4 class="display-6">Kid’s fashion</h4>
          <p style="color:black">189 items</p>
          <a href="product_list_kids.php">Shop now</a>
          <div class="underline"></div>		

        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <img class="img-fluid w-100" src="images/women.jpg">
        <div class="categories__text text-justify">
          <h4 class="display-6">Women’s fashion</h4>
          <p style="color:black">186 items</p>
          <a href="product_list_women.php">Shop now</a>
          <div class="underline"></div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <img class="img-fluid w-100" src="images/Access.jpg">

        <div class="categories__text text-justify">
          <h4 class="display-6">Accessories</h4>
          <p  style="color:black">143 items</p>
          <a href="product_list_accessories.php">Shop now</a>
          <div class="underline"></div>
		</div>
    </div>
    </div>
  </section>
  <!--- Category end--->
  <br>
  <br>
  <!--Product Section  Begins--->
  <section class="Product">
    <div class="container">
      <div class="row">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-3 text-center my-4">
            <h1 class="fs-2">Trending Item</h1>
            <div class="underline mx-auto mt-3"></div>
          </div>
		  </div>
      </div>
	  <div class="row justify-content-center g-4" id="product-list">		      
	  <?php 
					include "db_connection.php";
					$query = "select * from products where category='trending'";
					$result = $conn->query($query);

					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						// echo "id: " . $row["id"]. " - Name: " . $row["product_name"]. " " . $row["product_price"]. "<br>";
						?>
	<div class="col-lg-4 col-md-4 electronic">
          <div class="product-item shadow">
            <div class="product-img">
					  <img style="margin-left:73px;" src="images/allproducts/<?= $row["image"]?>" alt="">
            </div>
            <div class="product-content text-center py-3">
              <span class="d-block text-uppercase"style="color:black"><?php echo $row["product_name"];?></span>
              <span class="d-block" style="color:black"> <?php echo "₹ ". $row["product_actual_price"];?></span>
            </div>
        	<form action="addtocart.php" method="POST">
					  <input type="hidden" name="product_name" value="<?= $row["product_name"]?>"/>
					  <input type="hidden" name="product_price" value=" <?= $row["product_price"];?> "/>
					  <input type="hidden" name="product_id" value="<?= $row["id"];?>"/>
					  <input type="submit" name="submit_add_to_cart" value="Add to cart" class ="red_btn  "/>	  
			</form>
		</div>
		</div>
	<?php
					  }
					} else {
					  echo "0 results";
					}
					
					  ?>
                    
	</div>
    </div>
  </section>
  <!--Product Section 3 End--->
  <br>
  <br>
<!-- Trend Section Begin -->
  <section class="trend spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="trend__content">
            <div class="section-title">
              <h4>Hot Trend</h4>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/ht-1.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Chain bucket bag</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/ht-2.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Pendant earrings</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/ht-3.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Cotton T-Shirt</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="trend__content">
            <div class="section-title">
              <h4>Best seller</h4>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/bs-1.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Cotton T-Shirt</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/bs-2.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Zip-pockets pebbled tote <br />briefcase</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/bs-3.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Round leather bag</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="trend__content">
            <div class="section-title">
              <h4>Feature</h4>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/f-1.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Bow wrap skirt</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/f-2.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Metallic earrings</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
            <div class="trend__item">
              <div class="trend__item__pic">
                <img src="images/trend/f-3.jpg" alt="">
              </div>
              <div class="trend__item__text">
                <h6>Flap cross-body bag</h6>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <div class="product__price">₹ 59.0</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Trend Section End -->
  <br>
  <br>
  <!---Testimonals Begins---->
  <section id="Testimonials">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item carousel_testi active" data-bs-interval="1800">
          <div class="carousel-caption d-none d-md-block">
            <img class="testi_img img-fluid" src="images/R1.jpg">
            <div class="testi_txt">
              <h3>Reviews</h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
				<i class="fa-solid fa-star-half-stroke"></i>
              </div>
              <p>"Very good service. All the staff were cooperative & polite. Was a hassle free and timely delivery by them"	</p>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel_testi" data-bs-interval="2000">
          <div class="carousel-caption d-none d-md-block"> <img class="testi_img img-fluid" src="images/R2.jpg">
            <div class="testi_txt">
              <h3>Reviews</h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p> "Service Is Very good ,I Got Replaced Shirt In 3 days " </p>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel_testi data-set-bg" data-bs-interval="2000" >
          <div class="carousel-caption d-none d-md-block"> <img src="images/R3.jpg" class="testi_img img-fluid">
            <div class="testi_txt">
              <h3>Reviews</h3>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
              <p>"It’s a good service system, the delevery is also in time.. no damages found over all a good experience"</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!---Testimonals Ends-->
  <br>
  <br>
<!-- Services Section Begin -->
  <section class="services spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="services__item">
            <i class="fa fa-car"></i>
            <h6 >Free Shipping</h6>
            <p style="color:black">For all order over $99</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6">
          <div class="services__item">
            <i class="fa fa-money"></i>
            <h6>Money Back Guarantee</h6>
            <p style="color:black">If good have Problems</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="services__item">
            <i class="fa fa-support"></i>
            <h6>Online Support 24/7</h6>
            <p style="color:black">Dedicated support</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Services Section End -->
 <?php
require_once"footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- isotope plugin -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src='main.js'>
</body>
</html>
