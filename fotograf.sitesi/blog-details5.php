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
    <link href="./sumela.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Blog Website Template</title>

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
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item active"><a class="nav-link" href="blog.php">BLOG</a></li>

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

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/foto/resim1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4><i class="fa fa-user"></i> HİLAL TORUN &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 12/06/2020 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
              <h2>SÜMELA MANASTIRI</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2> SÜMALE MANASTIRI  </h2>
              </div>
            </div>

            <div class="col-md-8">
                <p> Sümela Manastırı (Yunanca: Panagia Sumela (Παναγία Σουμελά) veya Theotokos Sumela), Trabzon ilinin Maçka ilçesindeki Altındere vadisi sınırları içerisinde yer alan Meryem Ana Deresi'nin (Antik Yunanca adı: Panagia) batı yamaçlarında yer alan, Kara (Antik Yunanca adı: Mela) tepesinin üzerinde ve deniz seviyesinden 1.150 m yükseklikte konumlanmış Rum Ortodoks manastır ve kilise kompleksidir. <br>

                <br>
                Kilisenin MS 365-395 tarihleri arasında inşa edildiği sanılmaktadır. Anadolu'da sıkça rastlanılan Kapadokya kiliseleri tarzında yapılmıştır; hatta Trabzon'da Maşatlık mevkiinde benzeri bir mağara kilisesi daha vardır. Kilisenin ilk kuruluşu ile manastır haline dönüşümü arasındaki bin yıllık dönem hakkında fazla bir şey bilinmemektedir. 
            </p>

                <br>

                <h5>TRABZON'NUN MİRASİ SÜMELA MANASTIRI</h5>

                <br>

                <p> Kilise içinde Meryem figürleri Gürcülerin kullandıkları Gürcü madonna şeklinde resmedilmiştir.
Asıl kilisenin apsis kısmında, güney duvarında yukarıda Meryem'in doğuşu ve mabede sunuluşu, tebliğ, İsa'nın doğuşu, mabede sunuluşu ve hayatı, altta İncilden resimler.
Güney kapısında Meryem'in ölümü ve havariler.
Kilisenin doğuya bakan yukarı kısmında 2. sırada Genesis, Ademin yaratılışı, Havva'nın yaratılışı, Tanrı'ın tembihi, İsyan (Adem ile Havva'nın yasak meyveyi yemeleri), Cennetten kovulma. 3. sırada: Dirilme, Thomas'ın şüphesi, Kabirde bir melek, Nikaia (İznik) konsili.
Apsis kısmının dışında, yukarıda Mikail, Cebrail bulunmaktadı <br>

                <br>
                SÜMELA MANASTIRIN'DA YAPTIĞIMIZ ÇEKİMLER</p>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h4>HİLAL TORUN</h4>

                <br>
                
                <p>GÜZEL ÜLKEMİZİN DOĞAL GÜZELLİKLERİNDEN BİRİ OLAN SÜMELA MANASTIRINI  ADIM ADIM GEZEREK MÜKEMMEL MANZARALARINI KADRAJLAYARAK SİZLERE GÖSTERMEK İSTEDİM.<S></S>
                </p>
                
                <p></p>
              </div>
            </div>
        </div>

        <br>
        
        <div>       
</div>
  <br>
        
        <div>
        <div class="wrapframe">
<div class="slideshows">
  <div class="slideshow slideshow--hero">
    <div class="mainslides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>
    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow--contrast--before">
    <div class="secondslides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>
    </div>
  </div>
  <div class="slideshow slideshow--contrast slideshow--contrast--after">
    <div class="thirdslides">
      <div class="slide slide1"></div>
      <div class="slide slide2"></div>
      <div class="slide slide3"></div>
      <div class="slide slide4"></div>
    </div>
  </div>
</div>
  </div>
         

<br />
 
<!--dots start-->
<div class="dots">
    <span class="dot dot1"></span>
    <span class="dot dot2"></span>
    <span class="dot dot3"></span>
</div>
<!--dots end-->
 
<!--carousel end-->
 
        </div>
      </div>
    </div>

    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Yorum Yapın</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Gönder</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>Diğer platformlardan'da bize ulaşabilirsiniz.</p>

                <br> 

                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>