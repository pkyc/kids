<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . $password . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['usr_id'] = $row['id'];
		$_SESSION['usr_name'] = $row['name'];
		header("Location: index.php");
	} else {
		$errormsg = "錯誤的郵箱帳號或密碼！";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Login Script</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<?php include('nav.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>登錄</legend>
					
					<div class="form-group">
						<label for="name">電子郵件</label>
						<input type="text" name="email" placeholder="你的電子郵件" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">密碼</label>
						<input type="password" name="password" placeholder="你的密碼" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="登錄" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		新用戶? <a href="register.php">在此註冊</a>
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
