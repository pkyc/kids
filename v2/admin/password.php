<?php
session_start();
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="/css/bootstrap.admin.css" type="text/css" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<style type="text/css">
		#chart-container {
		width: 640px;
		height: auto;
		}
	</style>

</head>
<body>
<?php include('nav.php'); ?>

<?php if (isset($_SESSION['name'])) { ?>
	<H1 align=center> password  <br>
	<div align=center id="chart-container">
		<canvas id="mycanvas"></canvas>
	</div>

	<!-- javascript -->
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/Chart.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>

<?php } else { ?>
<H1 align=center><a href="index.php">Login please!</a></H1>
<?php } ?>

</body>
</html>

