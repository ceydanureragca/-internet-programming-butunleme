<html lang="en">
<?php
session_start();
try {
    $conn = new PDO("mysql:host=127.0.0.1;dbname=fotografcilik;charset=utf8", 'root', '');
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
} 
?>
<head>
 <link href="assets/css/stylee.css" rel="stylesheet"/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Üye & Üye Formu </title>
</head>

<body>
  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Üye Girişi</div>
      <div class="title signup">Üye Olun</div>
    </div>

    <!-- Start Form Container -->
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slider" id="login" checked>
        <input type="radio" name="slider" id="signup">
        <label for="login" class="slide login">Giriş</label>
        <label for="signup" class="slide signup"> Üye Olun</label>
        <div class="slide-tab"></div>
      </div>

      <div class="form-inner">

        <!-- Start Login Form -->
        <form action="" method="post" class="login">
          <div class="field">
            <input type="text" name="mail" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input type="password" name="pwd" placeholder="Password" required>
          </div>
          <div class="pass-link">
            <a href="#">
              Şifremi Unuttum?
            </a>
          </div>
          <div class="field">
            <input type="submit" value="Giriş">
          </div>
          <div class="signup-link">
            Üye Değilseniz? <a href="#">Üye Olun</a>
          </div>
        </form>
        <?php if(isset($_POST["pwd"])){
            $mail = $_POST["mail"];
            $sifre = $_POST["pwd"];

            $sayfalar = $conn->query("SELECT * FROM `kullanici` WHERE mail = '".$mail."'" )->fetchAll();
            if($sayfalar[0]['mail']==$_POST["mail"] && $sayfalar[0]['pwd']==$_POST["sifre"]) {
                $_SESSION["username"]=$sayfalar[0]['ad'];
                header("location:index.php"); 
            }

        }
        ?>



        

        <!-- Start Signup Form -->
        <form action="#" class="signup">
          <div class="field">

            <input type="text" placeholder="Ad" required>

          </div>
          <div class="field">

            <input type="text" placeholder="Soyad" required>

          </div>
          <div class="field">

            <input type="text" placeholder="Kullanıcı Adı" required>

          </div>
          <div class="field">
            <input type="text" placeholder="Mail" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Şifre" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Şifreyi Onaylayın" required>
          </div>
       

          <div class="field">
            <input type="submit" value="Üye Ol">
          </div>

        </form>
      </div>
    </div>
  </div>
</body>
<script> 
const loginForm = document.querySelector("form.login");

const signupForm = document.querySelector("form.signup");

const loginBtn = document.querySelector("label.login");

const signupBtn = document.querySelector("label.signup");

const signupLink = document.querySelector(".signup-link a");

const loginText = document.querySelector(".title-text .login");

const signupText = document.querySelector(".title-text .signup");

signupBtn.onclick = () => {
  loginForm.style.marginLeft = "-50%";
  loginText.style.marginLeft = "-50%";
};

loginBtn.onclick = () => {
  loginForm.style.marginLeft = "0%";
  loginText.style.marginLeft = "0%";
};

signupLink.onclick = () => {
  signupBtn.click();
};

</script>

</html>