<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>

	<form action="login.php" method="GET">
		
		Username:<input type="text" name="uname">
		<br>
		Email:<input type="text" name="uemail">
		<br>
		Password:<input type="Password" name="pwd">
		<br>
		<input type="submit" name="submit">


	</form>

	<?php

      $uname = $_GET["uname"];
      $uemail = $_GET["uemail"];
      $pwd = $_GET["pwd"];


      $f = fopen("data.txt", "a");
      fwrite($f, "Username: ".$uname."\n");
      fwrite($f, "Email: ".$uemail."\n");
      fwrite($f, "Password: ".$pwd."\n");
      fclose($f);

	?>

</body>
</html>