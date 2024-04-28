<?php 

session_start();

class Session {
    public function logout(){
       unset ($_SESSION['user_id']);
    }
}

?>