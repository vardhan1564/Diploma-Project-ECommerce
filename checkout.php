<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Shoppers | Checkout Page</title>
 <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">
  <!-- Bootstrap core CSS -->
  <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
   <!-- Custom styles -->
	<link href="styles/form-validation.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="py-5 container">
    <main>
		<div class="py-5 row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
		<h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your cart</span>
        </h4>
        <?php 
					include "db_connection.php";
					$query = "select c.*, p.image from cart as c join products as p on c.product_id = p.id";
					$result = $conn->query($query);


					$subtotal = 0;
					$shipping_charges = 0;
					$total_charges = 0;
					if ($result->num_rows > 0) {
					  // output data of each row
					  while($row = $result->fetch_assoc()) {
						// echo "id: " . $row["id"]. " - Name: " . $row["product_name"]. " " . $row["product_price"]. "<br>";
						$subtotal = $subtotal + $row["product_price"]*$row["product_quantity"];
						
	?>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0"><?php echo $row["product_name"];?></h6>
                </div>
              <span class="text-muted">₹<?php echo $row["product_price"];?></span>
            </li>
         <?php }
					}?>
         
         
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (₹)</span>
              <strong>₹<?= $subtotal; ?></strong>
              
            </li>
            <div id="emailHelp" class="form-text">&nbsp;<span style="color:red;">*</span>This Total Includes  Shipping  Charges </div>

          </ul>

        
        </div>
		
		
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" action="final1.php" method="POST">
		  
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" name="Fname" id="Fname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>

              <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" name="Lname" id="Lname" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>

              <div class="col-12">
                <label for="username" class="form-label">Phone Number </label>
                <div class="input-group has-validation">
                  
                  <input type="number" class="form-control" name="PhoneNo"id="phoneNo" placeholder="Phone Number" required  name="phn">
                  <div class="invalid-feedback">
                    Your PhoneNo is required.
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">Email </label>
                <input type="email" class="form-control" name="Email"id="Email" placeholder="you@example.com">
                <div class="invalid-feedback">
                  Please enter a valid email address for shipping updates.
                </div>
              </div>

              <div class="col-12">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control"  name="Address" id="Address" placeholder="1234 Main St" required>
                <div class="invalid-feedback">
                  Please enter your shipping address.
                </div>
              </div>

             

             

              <div class="col-md-3">
                <label for="zip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Zip code required.
                </div>
              </div>
            </div>

            <hr class="my-4">

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="same-address">
              <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="save-info">
              <label class="form-check-label" for="save-info">Save this information for next time</label>
            </div>

            <hr class="my-4">


            <hr class="my-4">
				<button class="w-100 btn btn-primary btn-lg" type="submit" a href="FinalOrderConfirm.php"> Confirm Order </button>
				<div id="emailHelp" class="form-text">&nbsp;<span style="color:red;">*</span>Currently We Accept Only Cash On Delivery  !!</div>
            
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; Shoppers</p>
      <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Privacy</a></li>
        <li class="list-inline-item"><a href="#">Terms</a></li>
        <li class="list-inline-item"><a href="#">Support</a></li>
      </ul>
    </footer>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="form-validation.js"></script>
</body>

</html>
