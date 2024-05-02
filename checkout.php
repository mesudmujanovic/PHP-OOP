<?php 
require_once 'include/header.php';
require_once 'app/classes/Cart.php';
require_once 'app/classes/Order.php';

if(!$user->is_logged()){
    header("Location: login.php");
    exit();
}

$cart = new Cart();
$cart_items = $cart->get_cart_items();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $delivery_address = $_POST['country'] . ", "
                      . $_POST['city'] .", "
                      . $_POST['zip'] .", " 
                      . $_POST['address'];
  
    $order = new Order();
    $order->create($delivery_address);

    $_SESSION['message']['type'] = "success";
    $_SESSION['message']['text'] = "success";
    header("Location: orders.php");
    exit();
 }


?>

<form method="post">
 <div class="mb-3">
   <label for="country" class="form-label">Country</label>
     <input type="text" class="form-control"  name="country" placeholder="Unesite državu">
   </div>
    <div class="mb-3">
      <label for="city" class="form-label">Cty</label>
      <input type="text" class="form-control"  name="city" placeholder="Unesite grad">
      </div>
      <div class="mb-3">
        <label for="zip" class="form-label">Zip</label>
         <input type="text" class="form-control" name="zip" placeholder="Unesite poštanski broj">
        </div>
       <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address" placeholder="Unesite poštanski broj">
        </div>
     <button type="submit" class="btn btn-primary">Order</button>
</form>

<?php
require_once 'include/footer.php';
?>