<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game 3  </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
</head>
<body>
<?php include('nav.php'); ?>

<?php if (isset($_SESSION['usr_id'])) { ?>
<H1 align=center> Game 3  </H1>
<h2 align=center>
請鬥快破解以下加密文字密碼, 並解釋這個方法。
<br>
  <br>
	UPEBZ J BN HPJOH UP UBML BCPVU JOUFSOFU TBGFUZ.
  <br>
  <br>
  <br>
  <br>
  <br>
	YTIFD N FR LTNSL YT YFQP FGTZY NSYJWSJY XFKJYD.
</h2>
<?php } else { ?>
<H1 align=center><a href="index.php">Login please!</a></H1>
<?php } ?>

</body>
</html>

