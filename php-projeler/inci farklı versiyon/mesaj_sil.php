<?php
// Yetki kontrol
session_start();
?>
<meta charset="utf-8"><body bgcolor="#ccc"><center>
<?
if ( $_SESSION["giris_basarili"] != TRUE ){
echo "<p>Bu sayfayı görüntüleme yetkiniz yok.</p>Yönlendiriliyorsunuz...";
echo "<script type='text/javascript'>
window.setTimeout(function() {
window.location.href='index.php';
}, 800);
</script>";
exit();
}

// vt bağlantısı kuruyoruz.
include("baglan.php");

$id = $_GET["entari_id"];

// vt silme işlemi
$sql = "DELETE FROM entariler WHERE entari_id=$id ";

if ( mysql_query( $sql ) ){
echo "$id <br><center><h1>$id. entry silindi.</h1></center>";
include("yonetim.php");
} else {
echo "<br>Sorgu hata verdi.<br>Yönlendiriliyorsunuz.";
echo "<script type='text/javascript'>
window.setTimeout(function() {
window.location.href='index.php';
}, 800);
</script>";
}
?>