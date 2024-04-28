<?php
require_once "include/header.php";
require_once "app/classes/User.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new User();
    $created = $user->create($name, $username, $email, $password);

    if($created) {
        $_SESSION['message']['type'] = "success";
        $_SESSION['message']['text'] = "success registred account";
      header("Location: login/login.php");
      exit();
    } else {
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "Not registered";
        header("Location: register/register.php");
        exit();
    }
}

?>

<?php require_once "inlcude/footer.php"; ?>
