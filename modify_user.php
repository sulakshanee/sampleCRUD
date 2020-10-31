<!DOCTYPE html>
<html>
<head>
	<title>Modify User Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/modify_user.css">
</head>
<body>

	<div class="container">
		<h1>Modify User</h1>
		<form>
			<label for="fname">First Name:</label> <br>
			<input type="text" name="fname" placeholder="First Name"> <br>
			<label for="lname">Last Name:</label> <br>
			<input type="text" name="lname" placeholder="Last Name"> <br>
			<label for="email">Email Address:</label> <br>
			<input type="email" name="email" placeholder="Email Address"> <br>
			<label for="password">Password:</label> <br>
			<ul>
				<li><a href="">Change Password</a></li> <br>
			</ul>
			<input type="submit" name="save" value="Save Changes">
			<ul>
				<li><a href="">Cancel</a></li>
				<li><a href="">Delete</a></li>
			</ul>
		</form>
	</div>

</body>
</html>