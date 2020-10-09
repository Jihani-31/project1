<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="../css/logFog.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
	<h2> FADTS | Forgot Password</h2>
	<div class="box">
		<form id='form' method="post">
			<fieldset style="padding: 35px 50px">
				<legend style="color: #218BDB"><B>Sign in to your account</B></legend>
				<div class="form-group">
					<label for="username"><B>User name</B></label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					<small>Error Message</small>
				</div>
				<div class="form-group">
					<label for="email"><B>Email</B></label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
					<small>Error Message</small>
				</div>
				<button type="submit" class="btn btn-primary"><B>Submit</B></button><br><br>
				<div class="new-account">
					<label style="font-size: 13px"><B>Go back to login:</B></label>
					<a href="login.php"><B>Click here</B></a>
				</div>
			</fieldset>
		</form>
	</div>

</body>
<script src="../Js/forgotPassword.js"></script>

</html>