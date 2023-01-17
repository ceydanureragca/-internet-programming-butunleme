<?php

//session_start();
include("database.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Thing</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<?php
session_start(); //oturum başlattık
include("database.php"); //veri tabanına bağlandık

//eğer mevcut oturum varsa sayfayı yönlendiriyoruz.
if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
    header("location:http://localhost/fotograf.sitesi/admin/html/dashboard/index.php");
} //eğer önceden beni hatırla işaretlenmiş ise oturum oluşturup sayfayı yönlendiriyoruz.
else if (isset($_COOKIE["cerez"])) {
    //Kullanıcı adlarını çeken sorgumuz
    $sorgu = $baglanti->query("select mail from admin");

    //Kullanıcı adlarını döngü yardımı ile tek tek elde ediyoruz
    while ($sonuc = $sorgu->fetch_assoc()) {
        //eğer bizim belirlediğimiz yapıya uygun kullanıcı var mı diye bakıyoruz.
        if ($_COOKIE["cerez"] == md5("aa" . $sonuc['mail'] . "bb")) {

            //oturum oluşturma buradaki değerleri güvenlik açısından
            //farklı değerler yapabilirsiniz
            //aynı zamanda kullanıcı adınıda burada tuttum
            $_SESSION["Oturum"] = "6789";
            $_SESSION["mail"] = $sonuc['mail'];

            //sonrasında index sayfasına yönlendiriyorum
            header("location:index.php");
        }
    }
}
//Giriş formu doldurulmuşsa kontrol ediyoruz
if ($_POST) {
    $txtmail = $_POST["txtmail"]; //Kullanıcı adını değişkene atadık
    $txtParola = $_POST["txtParola"]; //Parolayı değişkene atadık
}
?>


<!-- partial:index.partial.html -->

<div class="login-box">
  <h2>Giriş</h2>
  <form action="" method="post">
    <div class="user-box">
      <input type="text" ID="txtmail" name="txtmail" class="form-control" placeholder="Kullanıcı adı" value='<?php echo @$txtmail ?>'/>
      <label>E-Mail</label>
    </div>
    <div class="user-box">
      <input type="password" ID="txtParola" name="txtParola" class="form-control" placeholder="Parola"/>
      <label>Password</label>

    </div>
    <label>
                                <input type="checkbox" ID="ckbHatirla" name="ckbHatirla"/>
                                Beni hatırla
                            </label>

    <?php
                            //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                            if ($_POST) {
                                //sorguda kullanıcı adını alıp ona karşılık parola var mı diye bakıyoruz.
                                $sorgu = $baglanti->query("select parola from admin where mail='$txtmail'");
                                $sonuc = $sorgu->fetch_assoc();
                                echo "sonuc : " . $sonuc['parola'];

                                //parolaları md5 ile şifreledim ve başına sonuna kendimce eklemeler yaptım.
                                if  ($txtParola  == $sonuc["parola"]) {
                                    $_SESSION["Oturum"] = "6789"; //oturum oluşturma
                                    $_SESSION["mail"] = $txtmail;

                                    //eğer beni hatırla seçilmiş ise cookie oluşturuyoruz.
                                    //cookie de şifreleyerek kullanıcı adından oluşturdum
                                    if (isset($_POST["ckbHatirla"])) {
                                        setcookie("cerez", md5("aa" . $txtmail . "bb"), time() + (60 * 60 * 24 * 7));
                                    }
                                    header("location:http://localhost/fotograf.sitesi/admin/html/dashboard/index.php"); //sayfa yönlendirme
                                } else {
                                    //eğer kullanıcı adı ve parola doğru girilmemiş ise
                                    //hata mesajı verdiriyoruz
                                    echo "Kullanıcı adı veya parola yanlış!";
                                }
                            }
                            ?>
    <button name="giriş">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Giriş
</button>
  </form>
</div>
<!-- partial -->
  
</body>
</html>
