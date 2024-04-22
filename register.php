<?php require_once "include/header.php";?>

<form method="post" action="register.view.php">
<div class="form-group mb-3">
<label for="name">Full Name</label>
<input type="text" class="form-control" id="name" name="name" required>
</div>
<div class="form-group mb-3">
<label for="username">Username</label>
<input type="text" class="form-control" id="username" name="username" required>
</div>
<div class="form-group mb-3">
<label for="email">Email address</label>
<input type="email" class="form-control" id="email" name="email" required>
</div>
<div class="form-group mb-3">
<label for="password">Password</label>
<input type="password" class="form-control" id="password" name="password" required>
</div>
<button type="submit" class="btn btn-primary">
    Register
</button>
</form>

<?php require_once "include/footer.php";?>