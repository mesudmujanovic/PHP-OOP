<?php 
require_once 'include/header.php';
require_once 'app/classes/Cart.php';

if(!$user->is_logged()){
    header("Location: login.php");
    exit();
}

$cart = new Cart();
$cart_items = $cart->get_cart_items();
?>

<table class="table table-striper">
<thead>
    <tr>
        <th scope="col">Product Name</th>
        <th scope="col">Size</th>
        <th scope="col">Price</th>
        <th scope="col">Image</td>
    </tr>
</thead>
<tbody>
    <?php foreach($cart_items as $item) : ?>
    <tr>
        <th><?php echo $item['name']; ?></th>
        <th><?php echo $item['size']; ?></th>
        <th><?php echo $item['price']; ?></th>
        <th> <img src="<?php echo $item['name']; ?>" height="50"></th>
    </tr>
    <?php endforeach; ?>
</tbody>
</table>

<a href="checkout.php">Checkout</a>




<?php 
require_once 'include/footer.php';
?>