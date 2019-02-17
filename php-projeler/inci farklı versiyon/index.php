<?php
// Yetki kontrol
session_start();

include('header.php'); 
header('Content-Type: text/html; charset=utf-8');  
$baslik_cek=mysql_fetch_array($baslik_sorgu)
?>
<center>
<div style="visibility:hidden">
<input type="text" placeholder="başlık aç..."><input type="button" value="git"></div>
</center>
<div class="baslik_style"><?php echo $baslik_cek['baslik']; ?></div>
<?php while ($entari_cek=mysql_fetch_array($entari_sorgu)) { ?>
<font id="<?php echo $entari_cek["entari_id"]; ?>"><?php echo $entari_cek["entari_id"].".)"; ?></font>
<a style="text-decoration:none;float:right" href="index.php#<?php echo $entari_cek["entari_id"]; ?>">link</a>

<ul class="entryshow">
<li><?php echo '<center>'. $entari_cek["entari_mesaj"]; ?></li>

<?php
$sql = "SELECT entari_id, entari_mesaj order by entari_id asc FROM entariler";
{
echo "<div><form action='editle.php?entari_id=" . $entari_cek["entari_id"] . "'><input style='position:absolute;right:50px;' class='buttonstyle' type='submit' value='edit'></form></div>";
echo "<div><form action='mesaj_sil.php?entari_id=" . $entari_cek["entari_id"] . "'><input style='position:absolute;right:15px;' class='buttonstyle' type='submit' value='sil'></form></div><br>";
}
?>

</ul>

<?php } ?>

<?php include('entrybox.php'); ?>


