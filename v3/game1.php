<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game 1 </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
</head>
<body>
<?php include('nav.php'); ?>

<?php if (isset($_SESSION['usr_id'])) { ?>
<H1 align=center> Game 1 </H1>
<H2 align=center> 每隊給了2支鉛筆和一張編碼的紙條。團隊鬥快找出密碼原文！</H2>
<?php } else { ?>
<H1 align=center><a href="index.php">Login please!</a></H1>
<?php } ?>

</body>
</html>

