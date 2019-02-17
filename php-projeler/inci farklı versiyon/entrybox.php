<form action="islem.php" method="POST"><br><br>
<ul class="buttons">
<li><button class="buttonstyle" style="float:right;">*</button></li>
<li><button class="buttonstyle" style="float:right;">-!sl-</button></li>
<li><button class="buttonstyle" style="float:right;">' '</button></li>
<li><button class="buttonstyle" style="float:right;">(bkz:</button></li>
</ul>
<textarea id="yaz" style="outline:none;border:2px solid black" name="entari_mesaj" class="textarea" placeholder="Yazın..."></textarea>
<ul>
<li><button class="buttonstyle" type="submit" name="ekle" style="float:left;margin-right:5px">yolla panpa</button></li>
<li><button class="buttonstyle" style="float:left">caps</button></li>
</ul>
</form>

<?php
if ( $_SESSION["giris_basarili"] != TRUE ){
echo "<center>giriş yapmadınız.</center>";
}else{
echo "<br><br><center>hoş geldiniz. <a href='yonetim.php'>yönetim</a> <a href='cikis.php'>çıkış</a></center>";
}
?>
</div><br>
</body>
</html>