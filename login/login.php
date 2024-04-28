<?php
require_once "include/header.php";

?>

<div class="row justify-content-center">
    <div class="col-lg-5">
        <h3 class="text-center py-5">Login</h3>
<form action="login.view.php" method="POST">
<div class="form-group mb-3">
<label for="username">Username</label>
<input type="text" class="form-control" id="username" name="username" required>
</div>

<div class="form-group mb-3">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password" required>
</div>

<button type="submit" class="btn btn-primary">
    Login
</button>
</form>
<a href="register.php">Register</a>
    </div>
</div>

<?php require_once "include/footer.php";?>