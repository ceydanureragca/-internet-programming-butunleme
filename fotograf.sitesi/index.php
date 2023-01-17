<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Kadraj </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>KADRAJ <em>PHOTOGRAPHY</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">ANASAYFA
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.php">HAKKIMIZDA</a></li>

                <li class="nav-item"><a class="nav-link" href="team.php">EKİBİMİZ</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">BİZE ULAŞIN</a></li>
                
               <?php
              if(isset($_SESSION["username"]))
              {
                echo "<form action =\"\" method=\"Post\" > ";
                echo("<li class=\"nav-item\"><input class=\"nav-link\" value=\"ÇIKIŞ\" type=\"submit\" name=\"cikis\"></li>");
                echo "</form>";
              }

              else {
                echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"giris.php\">Giriş</a></li>";
              }
              
                if(isset($_SESSION["username"]))
                {
                  ?>
                  <li class="nav-item"><a class="nav-link" href=""><?php echo $_SESSION["username"] ?></a></li>
                  <?php
                }
              ?>

              <?php

              if(isset($_POST['cikis'])){
                session_destroy();
                header("location:index.php") ; 
              }

              ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>KAPADOKYA</h4 >
            <h2>KÜLTÜREL MİRASLARIMIZ</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>PAMUKKALE</h4>
            <h2>KÜLTÜREL MİRASLARIMIZ</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>EFES ANTİK KENT</h4>
            <h2>KÜLTÜREL MİRASLARIMIZ</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>HAKKIMIZDA</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Kadraj Fotoğrafçılık olarak güzel ülkemiz <a href="#">Türkiye'nin</a>  doğal güzelliklerini sizlere göstermek istiyoruz. Bunu yapma amacımız insanların ülkemizin doğal güzlliklerini daha iyi bilmesi ve bu konuda bilinçlenmesi.  2018 den beri ekip arkadaşlarım ve ben ,Türkiyenin her yerini gezerek ,tarihi ve trustik yerlerini fotograflamaya başladık. </p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
              </ul>
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/foto/arkaplan.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>SON EKLENENLER</h2>

              <a href="blog.php">Devamını Oku <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/foto/nevsehirmblog2.jpg" class="img-fluid" style="height: 40vh;" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details.php">KAPADOKYA</a></h4>

                <p style="margin: 0;"> Şeyma Doğan &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/foto/safranbolu-01.jpg" class="img-fluid" style="height: 40vh;" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details6.php">SAFRANBOLU</a></h4>

                <p style="margin: 0;"> YUNUS ACARCA &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/foto/ephesus.jpg" class="img-fluid" style="height: 40vh;" alt=""></a>

              <div class="down-content">
                <h4><a href="blog-details3.php">EFES ANTİK KENT</a></h4>

                <p style="margin: 0;"> MELİH ÇELTİK &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Bize Ulaşın</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>