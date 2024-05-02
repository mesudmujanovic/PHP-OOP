<?php
require_once "include/header.php";
require_once "app/classes/Cart.php";
require_once "app/classes/Order.php";

if(!$user->is_logged()){
    header("Location: login.php");
    exit();
}

$order = new Order();
$orders = $order->get_orders();

?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Size</th>
            <th>Image</th>
            <th>Delivery Address</th>
            <th>Order Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td><?php echo $order['order_id']; ?></td>
                <td><?php echo $order['name']; ?></td>
                <td><?php echo $order['quantity']; ?></td>
                <td><?php echo $order['price']; ?></td>
                <td><?php echo $order['size']; ?></td>
                <td><img src="<?php echo $order['image']; ?>" alt="Product Image" style="width: 100px;"></td>
                <td><?php echo $order['delivery_address']; ?></td>
                <td><?php echo $order['created_at']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once "include/header.php"; ?>