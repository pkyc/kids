<?php
session_start();
//check if form is submitted
if (isset($_POST['submit'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($password == "Counter_Strike") {
		$errormsg = "<H1 style='color:red;'> YOU WIN!</h1>";
	} else {
		$errormsg = "<h2> Good Try! Try again!</h2>";
		//header("Location: game5.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game 6</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
<!====================================================>
<!-- To login to game6, usename is hello,  password is Counter_Strike -->
<!====================================================>
<?php include('nav.php'); ?>

<?php if (isset($_SESSION['usr_id'])) { ?>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Your Email" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="submit" value="submit" class="btn btn-primary" />
					</div>
				</fieldset>

				<span><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="game5.php">Sign Up Here</a>
		</div>
	</div>
</div>

<?php } else { ?>
<H1 align=center><a href="index.php">Login please!</a></H1>
<?php } ?>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
