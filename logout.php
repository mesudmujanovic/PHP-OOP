<?php 
require_once "app/classes/Session.php";

$logout = new Session();
$logout->logout();

header('Location: login.php');
exit();
?>