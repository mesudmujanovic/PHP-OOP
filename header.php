<?php 
require_once "app/classes/Session.php";
require_once "app/classes/User.php";

$user = new User(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand navbar-light bg-light">
  <div class="container">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php if(!$user->is_logged()) : ?>
        <li class="nav-item">
          <a class="nav-link" href="register/register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login/login.php">Login</a>
        </li>
        <?php else : ?>
            <li class="nav-item">
          <a class="nav-link" href="orders.php">My Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout/logout.php">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<?php 
if(isset($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['message']['type']; ?> alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['message']['text']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>
