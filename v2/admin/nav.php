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
			<a class="navbar-brand" href="index.php">Admin</a>
			<?php if (isset($_SESSION['name'])) { ?>
				<a class="navbar-brand" href="password.php">| Show passwd |</a>
				<a class="navbar-brand" href="game1.php">Game 1</a>
				<a class="navbar-brand" href="game2.php">Game 2</a>
				<a class="navbar-brand" href="game3.php">Game 3</a>
				<a class="navbar-brand" href="game4.php">Game 4 |</a>
			<?php } ?>
			
		</div>

		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['name'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<?php } ?>
			</ul>
		</div>
</nav>

<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/bootstrap.min.js"></script>

