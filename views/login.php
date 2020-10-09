<!DOCTYPE html>
<html>

<head>

	<!-- <script src="../Js/logInForm.js"></script> -->
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/logFog.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>

	<h2> FADTS | User Login</h2>
	

		<div class="box">
			<fieldset style="padding: 35px 50px">
				<legend style="color: #218BDB"><B>Sign in to your account</B> </legend>
				<form id="form">


					<div class="form-group  " method="post">
						<label for="username"><B>User name</B></label>
						<input id="username" type="text" class="form-control" name="username" placeholder="Enter Username">
						<small>Error Message</small>
					</div>
					<div class="form-group ">
						<label for="password"><B>Password</B></label>
						<input id="password" type="password" class="form-control" name="password" placeholder="Enter Password">
						<small>Error Message</small>
					</div>
					<button type="submit" class="btn btn-primary">Login</button><br><br>
				</form>
				<div class="new-account">
					<label style="font-size: 13px"><B>Don't remember password?</B></label>
					<a href="forgotPassword.php"><B>Click here</B></a>
				</div>
			</fieldset>
		</div>
</body>
<script src="../Js/logInForm.js"></script>


</html>