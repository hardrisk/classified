<!DOCTYPE html>
<html>
<head>
<title>Yorumlar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.ft{position:relative;margin-bottom:22px}
.nick{color:black;}
.footer{text-align:center;width:100%;color:black;background-color:#777;height:50px;}
input{outline:none;border:2px solid black;text-align:center;}
textarea{outline:none;border:2px solid black;width:400px;height:100px;}
</style>
</head>
<body bgcolor="gray">
<center>

<?php
date_default_timezone_set('Europe/Istanbul');

include("yorumlar.php");
comment("index");
?>
<br><br><div class="footer"><p class="ft">&copy; <?php echo date("Y"); ?> ViceverAlone.com</p><div>
</center>
</body>
</html>