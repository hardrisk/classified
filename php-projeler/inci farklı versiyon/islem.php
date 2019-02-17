<?php
include('baglan.php');

if (isset($_POST['ekle']))
{
$entari_mesaj=$_POST["entari_mesaj"];
$ekle=mysql_query("insert into entariler (entari_mesaj) VALUES ('$entari_mesaj')");
if (mysql_affected_rows())
{
header('Location: index.php?durum=yes');
}
else
{
header('Location: index.php?durum=no');
}
}
?>