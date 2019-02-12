<?php

$az = ($_POST["name"]);
$asd = ($_POST["email"]);

if (isset($_POST["btn"]))
{
echo "<center>";
echo "<textarea id=\"az12\">,{'title':'" .$az;
echo "','url':'" .$asd;
echo "'}</textarea><br><button onclick=\"asd45()\">kopyala</button>";
}
?>



<html>
<body bgcolor="gray">
<style>
input{outline:none;text-align:center}
button{border:2px solid black}
textarea{font-size:80%;text-align:center;width:600px;height:80px;outline:none;border:2px solid black;z-index:1}
</style>
<center><br><br>
<input type="button" title="sayfayı yenile" value="yenile" onclick="window.location.reload();"><br>
<form style="margin-top:50px" id="jsform" action="" method="post">
Title: <br><input size="40" autofocus type="text" name="name" placeholder="tırnak içermesin"><br>
Link: <br><input size="40" type="text" name="email" placeholder="video linki"><br>
<input type="submit" value="yolla" name="btn">
</form>
<a href="mzk.php">mzk.php</a><br>

</center>

</body>

<script>
function asd45() {
  var copyText = document.getElementById("az12");
  copyText.select();
  document.execCommand("copy");
}
</script>

</html>
