<?php
session_start(); //oturum başlattık
//oturumdaki bilgilerin doğruluğunu kontrol ediyoruz
if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
    //eğer veriler doğru ise sayfaya girmesine izin veriyoruz

} else {
    header("location:http://localhost/fotograf.sitesi/admin/login/index.php");
}

?>