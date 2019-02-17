<?php
$username="asd";
$password="asd";
$sunucu="asd.com";
$database="asd";

$baglan= @mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");

if (!$baglan) {
echo "<center>Maalesef veritabanına bağlanamadı. Lütfen yazılımcınız ile iletişime geçin".mysql_errno();
}

$db=mysql_select_db($database);

if (!$db) {
echo "<center>Veriniz güncellenemedi. Lüften yazılımcınız ile iletişime geçin".mysql_error();
echo "<br>";
}
?>