<?php
session_start();
include_once '../dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game 2 answer </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="/css/bootstrap.admin.css" type="text/css" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
</head>
<body>
<?php include('nav.php'); ?>

<?php if (isset($_SESSION['name'])) { ?>
<H1 align=center> Game 2 answer</H1>
<h2 align=center> 
    <br>
    <br>
    Yenjo eth egam ytoda dan eus ti ni ryou elif.
    <br>
    &#8681;
    <br>
    Enjoy the game today and use it in your life.
    <br>
    <br>
</h2>
<?php } else { ?>
<H1 align=center><a href="index.php">Login please!</a></H1>
<?php } ?>

</body>
</html>

