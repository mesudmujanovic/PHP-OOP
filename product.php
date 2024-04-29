<?php 

require_once 'include/header.php';
require_once 'app/classes/Product.php';
require_once 'app/classes/Cart.php';

$product = new Product();
$product = $product->read($_GET['product_id']);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id = $product['product_id'];
    $user_id = $_SESSION['user_id'];

    $cart = new Cart();
    $cart->add_to_cart($product_id, $user_id);
    header('Location: cart.php');
    exit();
}

?>

<div class="row">
        <div class="col-lg-6">
        <img src="images/<?php echo $product['image'] ?>" class="card-img-top">
        </div>
        <div class="col-lg-6">
                    <h2 class="card-title"><?= $product['name']?></h2>
                    <p class="card-text"><?= $product['size'] ?></p>
                    <p class="card-text"><?= $product['price'] ?></p>
                   <form action="" method="post">
                   <button type="submit" class="btn btn-primary">
                     Add to Card
                   </button>
                   </form>
                </div>
</div>


<?php 
require_once 'include/footer.php';
?>