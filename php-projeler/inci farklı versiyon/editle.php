<?php
// Yetki kontrol
session_start();

if ( $_SESSION["giris_basarili"] != TRUE ){
echo "<body bgcolor='#333'><center><p>Bu sayfayı görüntüleme yetkiniz yok.</p>Yönlendiriliyorsunuz...";
echo "<script type='text/javascript'>
window.setTimeout(function() {
window.location.href='index.php';
}, 800);
</script>";
exit();
}
?>


<?php
include("baglan.php");

$id=$_GET['id'];
$query=mysql_query($baglan,"select * from `entariler` where entari_id='$id'");
$entaricek=mysql_fetch_array($query);
?>

<html>
<head>
<title>Entariyi düzenle</title>
<style>
textarea{border:2px solid black;outline:none;width:80%;background-color:#777;color:white}
body{color:red}
</style>
</head>
<body bgcolor='#333'>
<center>
<h3>Edit</h3>
<form method="POST" action="update.php?id=<?php echo $id; ?>">
<label>Editle:</label><br>
<textarea autofocus rows="23"><?php echo $entaricek["entari_id"]; ?></textarea><br>
<input type="submit" name="yolla" value="yolla">
</form>
<a href="yonetim.php">Yönetim</a><br>
<a href="index.php">ANA SAYFA</a>
</center>
</body>
</html>