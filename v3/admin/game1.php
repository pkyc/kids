<?php
session_start();
include_once '../dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game 1 answer</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="/css/bootstrap.admin.css" type="text/css" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
</head>
<body>
<?php include('nav.php'); ?>

<?php if (isset($_SESSION['name'])) { ?>
<H1 align=center> Game 1 Answer</H1>
<H2 align=center> 密碼棒 Scytale <br><br>
取紙條將其纏繞於木棒上，橫向寫下明文後取下布條。解密時，必須取得相同直徑的木棒。<br><br>
<img align=center src=scytale.gif>
</H2>
<?php } else { ?>
<H1 align=center><a href="index.php">Login please!</a></H1>
<?php } ?>

</body>
</html>

