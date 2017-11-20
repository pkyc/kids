<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Game  </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
</head>
<body>
<?php include('nav.php'); ?>

<?php if (isset($_SESSION['usr_id'])) { ?>
<H1 align=center> Game 4 </H1>
<h2 align=center>
我們共有8張卡，4張數字和4張字母。	
<br>
<br>
第一次，我們從字母卡中抽出1張，從數字卡中抽出1張。<br>每個團隊排列出可能的組合。<br>
然後我們隨機排列卡片。最高位置的一隊就是贏。
<br>
<br>
<br>
<table border=1 align=center><tr><td>
<h3 align=left>
例如:<br>
我們抽出"A" 和 "1",排出的組合: <br> 
1.A1<br>
2.1A
</td></tr></table>
</h3>
<br>
<br>
<br>
<br>
<h2 align=center>
第二次，我們從字母卡中抽出2張，從數字卡中抽出1張。
<br>
<br>
第三次，我們從字母卡中抽出2張牌，從數字卡中抽出2張。

</h2>

<?php } else { ?>
<H1 align=center><a href="index.php">Login please!</a></H1>
<?php } ?>

</body>
</html>

