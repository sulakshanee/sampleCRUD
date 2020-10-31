<!DOCTYPE html>
<html>
<head>
	<title>Change Password Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/change_password.css">
</head>
<body>

	<div class="container">
		<h1>Change Password</h1>
		<form>
			<label for="fname">First Name:</label>
			<input type="text" name="fname"> <br>
			<label for="lname">Last Name:</label>
			<input type="text" name="lname"> <br>
			<label for="email">Email Address:</label>
			<input type="email" name="email"> <br>
			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="Password"> <br>
			<label for="conpassword">Confirm Password:</label>
			<input type="password" name="conpassword" placeholder="Confirm Password"> <br>
			<input type="submit" name="save" value="Update Password">
			<ul>
				<li><a href="">Cancel</a></li>
			</ul>
		</form>
	</div>

</body>
</html>