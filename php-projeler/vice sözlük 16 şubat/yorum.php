<?php

include "baglan.php";

$armut = $_POST["armut"];
$elma = $_POST["elma"];
$yazici = $_POST["yazan"];

$comment_length = strlen($armut);

$url = '@(http)?(s)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@'; 
$armut = preg_replace($url, '<a href="http$2://$4" target="_blank" title="$0">$0</a>', $armut);

// 11 ve 12. satırı kaplayan kod bloğu A İŞLEMİni yapmaya yarıyor, 18. satırdaki
// kod bloğu ise B İŞLEMİni. bu iki kod bloğunu birlikte kullanmak işe yaramıyor 
// çünkü normal linkler ve eklentinin kopyaladıkları aynı anda çalışmıyor.

$newdate = str_replace('<br>', '', $armut); // armut değişkenindeki tüm <br>'leri kaldırır. (C İŞLEMİ)

$keldate = str_replace("'", "\'", $newdate); // newdate değişkenindeki tüm "'" işaretlerini kaldırır. (D İŞLEMİ)

// boş entry girme engelleme kodu başlangıcı (E İŞLEMİ)

$newdate = trim($newdate);

if(empty($newdate)){
header("location: index.php?bos=1");
return false; // bu satır bir işe yaramıyor galiba
}

// boş entry girme engelleme kodu sonu (E İŞLEMİ)

if($comment_length > 900) # entariye 900 karakter limiti koyar, 900 karakterden fazlaysa error sayfasına yönlendirir.
{
header("location: index.php?error=1");
}
else
{
mysql_query("INSERT INTO entariler VALUES('.','$keldate','$elma','$yazici')"); # $keldate aslında $armut idi
header("location: index.php"); # index.php?tmm=1 yapılırsa entry girildiğinde "entry gönderildi" uyarısı çıkar
}
?>