<?php
session_start();
if(isset($_SESSION['username']))
{
  header("location:index.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","username","password","dbname");
if($db)
{
if(isset($_POST['login_btn']))
{
$username=mysqli_real_escape_string($db,$_POST['username']);
$password=mysqli_real_escape_string($db,$_POST['password']);
$password=md5($password); //Remember we hashed password before storing last time
$sql="SELECT * FROM users WHERE  username='$username' AND password='$password'";
$result=mysqli_query($db,$sql);

if($result)
{

if(mysqli_num_rows($result)>=1)
{
$_SESSION['message']="You are now Loggged In";
$_SESSION['username']=$username;
header("location:login.php");
}
else
{
$_SESSION['message']="Kullanıcı adı veya parola yanlış.";
}
}
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Log in - Vice Sözlük</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body bgcolor="gray">
<center>

<main class="container">
<div class="col-md-6 col-md-offset-2">
<form method="post" action="login.php">
Username: 
<input type="text" name="username" class="textInput" value="Vice"><br>
Password: 
<input autofocus type="password" name="password" value="asd123" class="textInput"><br>
<input type="submit" name="login_btn" value="yolla panpa" class="Log In">
</table>
</form>
<?php
if(isset($_SESSION['message']))
{
echo "<div id='error_msg'>".$_SESSION['message']."</div>";
unset($_SESSION['message']);
}
$version = phpversion();
print "php versiyonu: " .$version;
?>
</div>

</main>
</div>

</body>
</html>