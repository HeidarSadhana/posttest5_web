<?php 
    session_start();
    if ( ! isset( $_SESSION['userLogged'] ) or "1" != $_SESSION['userLogged'] ){
        header('Location: login-form.php');
    }

    require('koneksi.php');
    require('crud/baca_db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=800" />
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>HS Art Gallery | User</title>
    <script src="js/script.js"></script>
</head>
<body>
    <!-- Header -->
    <header>
        <section class="navigation">
            <div class="box-navigation">
                <div id="logo">
                    <p>HS</p>
                </div>
                <div id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#koleksi">Koleksi</a></li>
                        <form action="logout.php" class="logout">
                            <button style="margin:5px 20px;" type="submit" class="loginbutton">Logout</button>
                        </form>
                        <div class = "toggle">
                            <input type="checkbox" id="toggle"/>
                            <label for="toggle"></label>
                        </div>
                    </ul>
                </div>
            </div>
        </section>
    </header>

    <div id="login_form" class="modal">
        <form class="modal-content animate" action="login.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
        
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                
                <button class="loginbutton" type="submit">Login</button>
            </div>
        
            <div class="container" style="display: flex; flex-direction:row; justify-content: space-between;">
                <button type="button" onclick="document.getElementById('login_form').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>

    <div class="landing">
        <?php echo '<h1>Hello '.$_SESSION["user"].'</h1>' ?>
        <h1>Welcome to</h1>
        <h2>HS Art Gallery</h2>
    </div>

    <!-- Koleksi -->
    <div class="koleksi" id="koleksi">
        <div class="container">
            <div class="heading">
                <button class="head1">KOLEKSI</button>
            </div>
                <?php include('crud/tampil.php'); ?>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">
                        Nama saya <b>Mohammad Heidar Sadhana</b> dengan NIM <b>2109106046</b>
                        <span id="titik">... <br></span><span id="more">
                            Untuk saat ini saya adalah mahasiswa semester 3 prodi Informatika <b>Universitas Mulawarman</b>
                        </span> 
                    </p>
                </div>
  
            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2022  All Rights Reserved by 
                    <a href="#">HS Art Gallery</a>.
                    </p>
            </div>
          </div>
        </div>
  </footer>
</body>
</html>
