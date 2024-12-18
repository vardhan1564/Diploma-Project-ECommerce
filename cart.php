<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shoppers | Shopping - Cart </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="styles/cart.css" rel="stylesheet">
	<style>
	</style>
</head>
<body>
<!---Navbar--->
<?php
require_once 'Navbar.php';

?>
<!-- Cart Start -->
    <div class="container-fluid pt-5">
    <div class="row px-xl-5">
    <div class="col-lg-8 table-responsive mb-5">
    <table class="table table-bordered text-center mb-0">
    <thead class="bg-secondary text-dark">
    <tr>
       <th>Products</th>
       <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
      <th>Remove</th>
       </tr>
     </thead>
	<tbody class="align-middle">
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
<tr>
      <td class="align-middle"><img src="images/allproducts/<?= $row["image"]?>" alt="" style="width: 50px;"> <?php echo $row["product_name"];?></td>
        <td class="align-middle"><?php echo $row["product_price"];?></td>
        <td class="align-middle">
         <div class="input-group quantity mx-auto" style="width: 100px;">
		<div class="input-group-btn">
		<form action="updateitem.php" method="POST">
		<input type="hidden" name="type" value="decrement"/>
		<input type="hidden" name="cart_id" value="<?= $row["id"];?>"/>
        <button type="submit" class="btn btn-sm btn-primary btn-minus" >
        <i class="fa fa-minus"></i>
           </button>
		   </form>
      </div>
        <div class="input-group-btn">
			<input type="text" name="product_quantity" class="form-control form-control-sm bg-secondary text-center" value="<?= $row["product_quantity"];?>">
			<form action="updateitem.php" method="POST">
				<input type="hidden" name="type" value="increment"/>
				<input type="hidden" name="cart_id" value="<?= $row["id"];?>"/>
				<form action="updateitem.php" method="POST">
				<button type="submit" class="btn btn-sm btn-primary btn-plus">
                <i class="fa fa-plus"></i>
               </button>
				</form>
                </div>
          </div>
        </td>
	 <td class="align-middle"><?php echo $row["product_price"]*$row["product_quantity"];?> </td>
	 <td class="align-middle">
		<form action="removeitem.php" method="POST">
		<input type="hidden" name="cart_id" value="<?= $row["id"];?>"/>
		<input type="submit" name="submit_add_to_cart" value="Delete" class="red_button add_to_cart_button"/>
		</form>
	</td>
   </tr>
	 <?php }
	}?>
	 </tbody>
    </table>
    </div>
       <div class="col-lg-4">
       <div class="card border-secondary mb-5">
          <div class="card-header bg-secondary border-0">
         <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
          </div>
           <div class="card-body">
           <div class="d-flex justify-content-between mb-3 pt-1">
            <h6 class="font-weight-medium">Subtotal</h6>
          <h6 class="font-weight-medium"><?= $subtotal; ?></h6>
            </div>
           <div class="d-flex justify-content-between">
            <h6 class="font-weight-medium">Shipping</h6>
          <h6 class="font-weight-medium"><?= $shipping_charges;?></h6>
           </div>
            </div>
            <div class="card-footer border-secondary bg-transparent">
             <div class="d-flex justify-content-between mt-2">
             <h5 class="font-weight-bold">Total</h5>
              <h5 class="font-weight-bold"><?= $subtotal +$shipping_charges ; ?></h5>
               </div>
			<form action="billing.php" method="POST">
			</form>
			<a href="checkout.php">
                   <button class="btn btn-block btn-primary my-3 py-3" >Proceed To Checkout</button>
            </div>
            </div>
            </div>
        </div>
    </div>
	<!-- Cart End -->
</body>
</html>