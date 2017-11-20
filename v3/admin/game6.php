<?php
session_start();

if(isset($_SESSION['usrx_id'])!="") {
	header("Location: index.php");
}

//check if form is submitted
if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($password == "lord_of_the_rings") {
		$errormsg = "<H1 style='color:red;'> YOU WIN!</h1>";
	} else {
		$errormsg = "<h2> Good Try! Try again!</h2>";
		//header("Location: game6.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Game 6</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="https://ssl.gstatic.com/sites/p/b82a75/system/app/themes/ski/standard-css-ski-ltr-ltr.css" />
	<link rel="stylesheet" type="text/css" href="/site/practicehsctf/_/rsrc/1509610380000/system/app/css/overlay.css?cb=ski150goog-ws-leftnone30themedefaultstandard" />
	<link rel="stylesheet" type="text/css" href="/site/practicehsctf/_/rsrc/1509610380000/system/app/css/camelot/allthemes-view.css" />
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Home</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="game6.php">Login</a></li>
				<li><a href="game6.php">Sign Up</a></li>
			</ul>
		</div>
	</div>
</nav>

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
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>

				<span><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="game6.php">Sign Up Here</a>
		</div>
	</div>
</div>
<H1 align=center>
<div id="sites-chrome-main-wrapper">
<div id="sites-chrome-main-wrapper-inside">
<table id="sites-chrome-main" class="sites-layout-hbox" cellspacing="0" cellpadding="{scmCellpadding}" border="0">
<tr>
<td id="sites-chrome-sidebar-left" class="sites-layout-sidebar-left initial" style="width:150px">
</td>
<td id="sites-canvas-wrapper">
<div id="sites-canvas" role="main">
<div id="goog-ws-editor-toolbar-container"> </div>
<div xmlns="http://www.w3.org/1999/xhtml" id="title-crumbs" style="">
</div>
<h3 xmlns="http://www.w3.org/1999/xhtml" id="sites-page-title-header" style="" align="left">
<span id="sites-page-title" dir="ltr" tabindex="-1" style="outline: none">Answer: hightlight the ...., ctrl-a , paste to somewhere</span>
</h3>
<div id="sites-canvas-main" class="sites-canvas-main">
<div id="sites-canvas-main-content">
<table xmlns="http://www.w3.org/1999/xhtml" cellspacing="0" class="sites-layout-name-one-column sites-layout-hbox"><tbody><tr><td class="sites-layout-tile sites-tile-name-content-1"><div dir="ltr">The password is ........................................................................................................................lord_of_the_rings</div></td></tr></tbody></table>
<textarea> </textarea>
</div> 
</div> 
<div id="sites-canvas-bottom-panel">
<div xmlns="http://www.w3.org/1999/xhtml" id="COMP_page-subpages"> </div>
<div id="sites-attachments-container">
</div>
</div>
</div> 
</td> 
</tr>
</table> 
</div> 
</div> 
<div id="sites-chrome-footer-wrapper">
<div id="sites-chrome-footer-wrapper-inside">
<div id="sites-chrome-footer">
</div>
</div>
</div>
</div> 
</div> 


<script src="/js/jquery-1.10.2.js"></script>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>
