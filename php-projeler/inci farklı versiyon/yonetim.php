<?php
// Yetki kontrol
session_start();
?>
<body bgcolor='#ccc'>
<center>
<?php
if ( $_SESSION["giris_basarili"] != TRUE ){
echo "<br><br><br>Bu sayfayi görüntüleme yetkiniz yok<br>";
echo "Anasayfaya yönlendiriliyorsunuz...";
echo "
<script type='text/javascript'>
window.setTimeout(function() {
window.location.href='index.php';
}, 900);
</script>";
exit();
}

// veritabani baglantisi
include("baglan.php");

echo "<style>asagidakilere class verip buraya classi yaz{text-align:left}</style><div style='height:20px;text-align:center;background-color:red;position:fixed;top:0;right:0;width:44px;border:3px solid #73AD21'><a style='position:absolute;width:100%;height:100%;top:2;left:0;z-index:1;text-decoration:none;' href='cikis.php'><span>ÇIKIŞ</span></a></div><center>";
// veritabanindan veri cekiyoruz.
$sql444 = "SELECT entari_id, entari_mesaj FROM entariler order by entari_id asc";
$result = mysql_query( $sql444 );

echo "<a href='index.php#yaz'>ANA SAYFA</a><br>";
echo "<table class='hoverTable' border=1><!--- bu satira style='text-align:center' yazabilirsin --->";
echo "<tr>";
echo "<td style='text-align:center'><b>entari_id</b></td>";
echo "<td style='text-align:center'><b>entari_mesaj</b></td>";
echo "<td style='text-align:center'><b>Edit?</b></td>";
echo "<td style='text-align:center'><b>Sil?</b></td>";
echo "</tr>";
while( $row = mysql_fetch_array($result) ){
echo "<tr>";
echo "<td style='text-align:center'>".$row["entari_id"]."</td>";
echo "<td width=800 style='text-align:center'>".$row["entari_mesaj"]."</td>";
echo "<td style='text-align:center'><a href='editle.php?entari_id=" . $row["entari_id"] . "'>Edit</a></td>";
echo "<td style='text-align:center'><a href='mesaj_sil.php?entari_id=" . $row["entari_id"] . "'>Sil</a></td>";
echo "</tr>";
}
echo "<style>
.hoverTable{border-collapse:collapse;}
.hoverTable td{padding:7px; border:#4e95f4 1px solid;}
.hoverTable tr{background: #b8d1f3;}
.hoverTable tr:hover{background-color: #ffff99;}
</style></table></center></body>";
?>