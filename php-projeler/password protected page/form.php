<html>
<body bgcolor=gray><center>

<form method="POST">
<p>Enter password for access:</p>
<input autofocus style="border:2px solid black;outline:none" type="password" name="password">
<button type="submit">Submit</button>
<?php if( $_SERVER['REQUEST_METHOD'] == 'POST' ) { ?>
<p>Password is not valid.</p>
<?php } ?>
</form>

</body>
</html>