<?php
session_start();
error_reporting(0);
//connect to database (üyelik sistemi için)
$db=mysqli_connect("localhost","username","password","dbname");

?>
<meta charset="utf-8">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<?php

include "baglan.php";

$find_comments = mysql_query("SELECT * FROM entariler order by entrynumara asc");
while($row = mysql_fetch_assoc($find_comments))
{
$yazan = $row['yazan'];
$entarimetni = $row['elma'];
$saatvetarih = $row['armut'];
$entarinosu = $row['entrynumara'];

echo "<strong style='margin-left:10px;margin-top:30px'>$entarinosu</strong>.)<br>";
echo "<center><div style='margin-top:8px;border:2px solid #232323;background-color:darkgray;color:black;width:98%'><label style='position:relative;top:8px;font-size:16px'>";
echo nl2br($entarimetni);
echo "</label><br><span style='font-size:14px;color:red;margin-left:87%'>$yazan</span><br><span style='font-size:12px;color:darkblue;margin-left:87%'>$saatvetarih</span></div><p></center>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Vice Sözlük</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<base targ="_blank">
<style>
#myasd{
width:400px;
height:40px;
background:transparent;
color:#000;
text-align:center;
}
</style>
<style>
/* unvisited link */
a:link{color:blue;text-decoration:none}
/* visited link */
a:visited{color:purple}
/* mouse over link */
a:hover{color:blue;text-decoration:underline}
/* selected link */
a:active{color:red;text-decoration:none}
</style>

<style>
.girisler{background-color:#ccc;border: 2px solid;outline:none;color:black;text-align:center}
a.cikis{background-color:#ccc;border: 2px solid;outline:none;color:black;text-align:center}
.tiklanandiv{font-family:"Lucida Console";font-size:8px;line-height:10px;cursor:default;z-index:1;background-color:#ccc;text-align:center;position:fixed;top:85;left:0;height:20px;width:56px;border:4px solid #777}
</style>

<style>
#div1{
color:red;
width:20%;
padding:20px 0;
text-align:center;
background-color:black;
margin-top:20px;
display:none;
}
</style>
</head>

<body bgcolor="gray">

<!--- burasi ikinci sol üstteki saat için --->
<div id="date-time2" class="tiklanandiv" onclick="location.href='index.php'"></div>
<script src="indextekisaatjquery-1.7.2.min.js"></script>
<script>
function updatingClock(selector, type) {
    function currentDate() {
        var currentDate = new Date;
        var Day = currentDate.getDate();
        if (Day < 10) {
            Day = '0' + Day;
        } //end if
        var Month = currentDate.getMonth() + 1;
        if (Month < 10) {
            Month = '0' + Month;
        } //end if
        var Year = currentDate.getFullYear();
        var fullDate = Day + '.' + Month + '.' + Year;
        return fullDate;
    } //end current date function

    function currentTime() {
        var currentTime = new Date;
        var Seconds = currentTime.getSeconds();
        if (Seconds < 10) {
            Seconds = '0' + Seconds;
        }
        var Minutes = currentTime.getMinutes();
        if (Minutes < 10) {
            Minutes = '0' + Minutes;
        }
        var Hour = currentTime.getHours();
        if (Hour < 10) {
            Hour = '0' + Hour;
        } //end if
        var Time = Hour + ':' + Minutes + ':' + Seconds;
        return Time;
    } // end current time function


    function updateOutput() {
        var output;
        if (type == 'time') {
            output = currentTime();
            if ($(selector).text() != output) {
                $(selector).text(output);
            } //end if
        } //end if
        if (type == 'date') {
            output = currentDate();
            if ($(selector).text() != output) {
                $(selector).text(output);
            } //end if
        } //end if
        if (type == 'both') {
            output = ' ' + currentTime() + ' ' + currentDate();
            if ($(selector).text() != output) {
                $(selector).text(output);
            } //end if
        } //end if
    }//end update output function
    updateOutput();
    window.setInterval(function() {
        updateOutput();
    }, 1000); //run update every 1 second
} // end updating clock function
updatingClock('#date-time2', 'both');
</script>
<!--- burasi ikinci sol üstteki saat için --->

<center>

<?php
$kisi22 = $_SESSION['username'];
if($_SESSION['username']==NULL){
echo '<div style="float:right;position:sticky;border:2px solid #000;width:140px">Giriş yapmadınız';
echo '<li><a href="register.php">Register</a></li>';
echo '<li><a href="login.php">Log in</a></li></div><br><br><br>';
echo '<div id="girisyap" style="background-color:green;float:center;position:sticky;bottom:80px;border:2px solid #000;width:240px">';
echo '<form method="post" action="login.php"><br>Username: 
<input type="text" required name="username" class="girisler" value="Vice"><br>
Password: 
<input autofocus type="password" required name="password" value="asd123" class="girisler"><br>
<input type="submit" class="girisler" name="login_btn" value="yolla panpa"><br>
</form></div>';
}else{
echo '<h2>YORUM YAP</h2>
<p>alter table karpuz AUTO_INCREMENT=1</p><button class="girisler" onclick="asd()">saat</button>
<p style="font-size:11px">giris yapma ve mesaj silme sistemi burada yok*</p>nl2br<br>
<p>latin5_turkish_ci secilir her zaman</p>
<a href="vtyedekle.php">vtyedekle.php</a><br>
<form action="yorum.php" method="POST">';

echo '<button class="girisler" type="button" onclick="d4()">#cccccc</button>
<button class="girisler" type="button" onclick="e5()">#777777</button>
<button class="girisler" type="button" onclick="f6()">#333333</button>
<button class="girisler" type="button" onclick="p9()">darkgray</button>
<button class="girisler" type="button" onclick="p11()">default (gray)</button><br>';

echo '<div id="div1">zaman: <input style="text-align:center;border:2px solid black;color:#00FF00;background-color:black;width:150px" type="text" readonly size="14" name="elma" id="tarih"><br></div>yazan:<br>';
echo "<input type='text' readonly class='girisler' value='$kisi22' size='6' name='yazan'>";
echo '<br>mesajın:<br>';
echo '<textarea autofocus placeholder="üğişçö" class="girisler" name="armut" cols="100" rows="5"></textarea><br>';
if(isset($_GET['tmm']))
{
echo "<div id='myasd'><p>Entari gönderildi. ✓</p></div>";
}
if(isset($_GET['error']))
{
echo "<div id='myasd'><p>Yazdıklarınız kaydolmadı çünkü karakter limitine takıldınız.</p></div>";
}
if(isset($_GET['bos']))
{
echo "<div id='myasd'><p>Boş entry girilemez.</p></div>";
}
echo '<input class="girisler" type="submit" value="yolla panpa"><hr>';
echo '<div style="padding:5px;float:right;position:sticky;border:2px solid #000;width:140px">';
echo '<span style="margin-bottom:10px">Hoş geldin <b>';
echo $kisi22. '</b></span>';
echo '<br><button style="margin-bottom:4px;margin-top:10px" class="girisler" formaction="logout.php">';
echo 'Çıkış</button><br></div><br><br><br><br>';
}
?>
<div>
</div>

</center>

</body>

<script>
var timer = setInterval( getDate, 1000);
function getDate(){
var todaydate = new Date();
var aa = todaydate.getHours();
var bb = todaydate.getMinutes();
var cc = todaydate.getSeconds();
var dd = todaydate.getDate();
var ee = todaydate.getMonth() + 1;
var ff = todaydate.getFullYear();

if (aa < 10) {
  aa = '0' + aa;
}
if (bb < 10) {
  bb = '0' + bb;
}
if (cc < 10) {
  cc = '0' + cc;
}
if (dd < 10) {
  dd = '0' + dd;
}
if (ee < 10) {
  ee = '0' + ee;
}

var datestring = dd + "." + ee + "." + ff + " " + aa + ":" + bb + ":" + cc;
document.getElementById("tarih").value = datestring; //don't need ()
}
document.getElementById("tarih").onload = getDate();
</script>

<script>
function asd() {
    var x = document.getElementById("div1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<script>
setTimeout(function() {
    $('#myasd').hide();
}, 4000); // <-- time in miliseconds
</script>

<script>
function d4() {
document.body.style.backgroundColor = "#cccccc";
}
function e5() {
document.body.style.backgroundColor = "#777777";
}
function f6() {
document.body.style.backgroundColor = "#333333";
}
function p9() {
document.body.style.backgroundColor = "darkgray";
}
function p11() {
document.body.style.backgroundColor = "gray";
}
</script>

</html>