<?php 
session_start();

// vt bağlantısı kuruyoruz.
include("baglan.php");

// giris_kontrol.php
$k_adi = $_POST["f_ad"];
$parola = $_POST["f_parola"];

$sql = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$k_adi' AND parola = '$parola'";
$results = mysql_query($sql);
$kayit_sayisi = mysql_num_rows($results);

if ( $kayit_sayisi == 1 ) {

$_SESSION["giris_basarili"] = TRUE;
echo "<body bgcolor='#ccc'><center>Giriş Başarılı!";
echo "<br><a href='yonetim.php'>Yönetim Sayfası</a></center></body>";
echo "<script type='text/javascript'>
window.setTimeout(function() {
window.location.href='index.php#yaz';
}, 10);
</script>";
}else{
echo "<body bgcolor='#ccc'><center><br><br><br>Kullanıcı adı ya da parola hatalı.<br><br><br><br><br><br><br>";
echo "<a style='text-decoration:none;color:red;font-size:75px' href='giris.html'>Tekrar dene</a>";
echo "</center></body>";
echo "
<script>
alert('Kullanıcı adı ya da parola hatalı.');
</script>";
echo "<script type='text/javascript'>
window.setTimeout(function() {
window.location.href='giris.html';
}, 300);
</script>";
}
?>