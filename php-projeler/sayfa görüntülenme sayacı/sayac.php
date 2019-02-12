<?php
$dosya=("sayac.txt");
$hits=file($dosya);
$hits[0] ++;
$fp=fopen($dosya , "w");
fputs($fp, "$hits[0]");
fclose($fp);
echo "<div style=\"text-align:center\">Bu sayfa <b>";
echo $hits[0];
echo "</b> kere görüntülendi.</div>";
?>