<?php 
require_once "include/header.php";
require_once "app/classes/User.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $result = $user->login($username, $password);

    if(!$result) {
        $_SESSION['message']['type'] = "danger";
        $_SESSION['message']['text'] = "not succesfull registred account";
        header("Location: login.php");
        exit();
    };
      header("Location: index.php");
    exit();
}

?>

