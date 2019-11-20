
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="stylelogin.css">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js">
  </script>
  <script src="js/bootstrap.min.js">
  </script>
</head>
<body>
	<div class="contain row">
		<div class="com-md-6">
			<h2 class="text-center">Login</h2><hr />
			<form action="processlogin.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter Your Username">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" placeholder="Enter Your Password">
				</div>
				<p class="text-center" style="color:red;">
					
				</p>
				<div class="form-group">
					<input type="submit" name="btnLogin" class="btn btn-primary" value="Login">
				</div>
			</form>
		</div>
	</div>

<script type="text/javascript" src="js.jquery.min.js"></script>
<script type="text/javascript" src="js.bootstrap.min.js"></script>
<script type="text/javascript" src="js.popper.min.js"></script>
</body>
</html>