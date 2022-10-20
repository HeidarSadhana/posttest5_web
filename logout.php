<?php 
    session_start(); 
    if (isset($_SESSION['adminLogged'])){
        unset($_SESSION['adminLogged']);
    }
    if (isset($_SESSION['userLogged'])){
        unset($_SESSION['userLogged']);
    }
    session_destroy();
    header('Location: login-form.php'); 
?>