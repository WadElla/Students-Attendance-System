<!DOCTYPE html>
<?php
	session_start();
	if(ISSET($_SESSION['admin_id'])){
		header('location: home.php');
	}
?>
<html lang = "eng">
	<head>
		<title>Attendance System</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
	<body>
		<nav class = "navbar navbar-inverse navbar-fixed-top">
			<div class = "container-fluid">
				<div class = "navbar-header">
					<img src = "images/logo.png" width = "80px" height = "80px"/>
					<p class = "navbar-text pull-right">Attendance System</p>
				</div>
				
			</div>
		</nav>
		<div class = "container" style = "margin-top:120px;">
			<div class = "row row-centered">
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-2 col-centered"></div>
				<div class = "col-lg-4 col-centered">
					<div class = "panel panel-primary">
						<div class = "panel-heading">
							<h4>Admin Login</h4>
						</div>
						<div class = "panel-body">
							<form enctype = "multipart/form-data">
								<div id = "username_warning" class = "form-group">
									<label class = "control-label">Username:</label>
									<input type = "text" id = "username" class = "form-control" />
								</div>
								<div id = "password_warning" class = "form-group">
									<label class = "control-label">Password:</label>
									<input type = "password" maxlength = "12" id = "password" class = "form-control" />
								</div>
								<div id = "result"></div>
								<br />
								<button type = "button" class = "btn btn-primary btn-block" id = "login_admin"><span class = "glyphicon glyphicon-save"></span> Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class = "navbar navbar-fixed-bottom alert-warning">
			<div class = "container-fluid">
				<label class = "pull-left">&copy;Attendance System</label>
				<label class = "pull-right">Developed: <a href = "=">WADELLA</a></label>
			</div>	
		</div>
	</body>
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>
	<script src = "js/login.js"></script>
</html>