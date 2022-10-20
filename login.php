<?php 
    $akun_admin = ['username' => 'admin', 'password' => 'admin123']; 
    $akun_user = ['username' => 'heidar', 'password' => 'heidar123']; 

    if($akun_admin['username'] == $_POST['uname'] && $akun_admin['password'] == $_POST['psw']){ 
        session_start(); 
        $_SESSION["adminLogged"] = "1"; 
        header('Location: admin.php'); 
        exit();
    }else if($akun_user['username'] == $_POST['uname'] && $akun_user['password'] == $_POST['psw']){
        session_start(); 
        $_SESSION["user"] = $akun_user['username'];
        $_SESSION["userLogged"] = "1"; 
        header('Location: index.php'); 
        exit();
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']); 
        exit(); 
    }
?>