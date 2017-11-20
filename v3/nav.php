<?php
include_once 'dbconnect.php';
?>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">主頁 | </a>
			<?php if (isset($_SESSION['usr_id'])) { ?>
				<a class="navbar-brand" href="game1.php">Game 1</a>
				<a class="navbar-brand" href="game2.php">Game 2</a>
				<a class="navbar-brand" href="game3.php">Game 3</a>
				<a class="navbar-brand" href="game4.php">Game 4 | </a>
				<a class="navbar-brand" href="game5.php">Game 5</a>
				<a class="navbar-brand" href="game6.php">Game 6</a>
				<a class="navbar-brand" href="game7.php">Game 7 |</a>
			<?php } ?>
			
		</div>

		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">登錄為 <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">登出</a></li>
				<?php } else { ?>
				<li><a href="login.php">登錄</a></li>
				<li><a href="register.php">注冊</a></li>
				<?php } ?>
			</ul>
		</div>
</nav>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>

