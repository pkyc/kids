<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$dob = mysqli_real_escape_string($con, $_POST['dob']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	
	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "用戶名稱只能包含字母";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "請輸入有效的電子郵件, xxx@abc.com";
	}
	if(!$dob) {
		$error = true;
		$dob_error = "請輸入有效的出生日期, dd/mm/yyyy ";
	}
	if(strlen($hkid) < 0 ) {
		$error = true;
		$hkid_error = "請輸入有效的香港身份證號碼, a1234567";
	}
	if(strlen($password) < 0) {
		$error = true;
		$password_error = "密碼必須至少為1個字符";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "密碼和確認密碼不一樣";
	}
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO users(name,email,bday,hkid,password) VALUES('" . $name . "', '" . $email . "','" . $dob . "','" . $hkid . "','" . $password . "')")) {
			$successmsg = "成功註冊! <a href='login.php'>點擊此處登錄</a>";
		} else {
			$errormsg = mysqli_error($con);
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Registration Script</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>
<?php include('nav.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>注冊</legend>

					<div class="form-group">
						<label for="name">用戶名</label>
						<input type="text" name="name" placeholder="你的用戶名" required value="<?php if($error) echo $name; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">電子郵件</label>
						<input type="text" name="email" placeholder="電子郵件" required value="<?php if($error) echo $email; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">出生日期</label>
						<input type="date" name="dob" placeholder="dob" class="form-control" value="2017-11-22" />
						<span class="text-danger"><?php if (isset($dob_error)) echo $dob_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">香港身份證號碼</label>
						<input type="text" name="hkid" placeholder="a12345678" class="form-control" />
						<span class="text-danger"><?php if (isset($hkid_error)) echo $hkid; ?></span>
					</div>

					<div class="form-group">
						<label for="name">密碼</label>
						<input type="password" name="password" placeholder="密碼" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">確認密碼</label>
						<input type="password" name="cpassword" placeholder="確認密碼" required class="form-control" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
					</div>

					<div class="form-group">
						<input type="submit" name="signup" value="注冊" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		已經註冊? <a href="login.php">在此登錄</a>
		</div>
	</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



