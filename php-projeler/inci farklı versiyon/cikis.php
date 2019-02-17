<?php
// cikis.php
session_start();

$_SESSION["giris_basarili"] = NULL; 
session_destroy();
echo "<body bgcolor='#ccc'><center><h1>çıkış yaptınız</h1>";
echo "<br><a href='yonetimgiris.html'>yonetici girişi</a><br><a href='index.php'>Ana Sayfa</a></center></body>";
?>

<script type="text/javascript">
window.setTimeout(function() {
window.location.href='index.php#yaz';
}, 100);
</script>