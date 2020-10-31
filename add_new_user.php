<!DOCTYPE html>
<html>
<head>
	<title>Add New User Page</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/add_new_user.css">
</head>
<body>

	<div class="container">
		<h1>Add New User</h1>
		<form>
			<label for="fname">First Name:</label>
			<input type="text" name="fname" placeholder="First Name"> <br>
			<label for="lname">Last Name:</label>
			<input type="text" name="lname" placeholder="Last Name"> <br>
			<label for="email">Email Address:</label>
			<input type="email" name="email" placeholder="Email Address"> <br>
			<label for="password">Password:</label>
			<input type="password" name="password" placeholder="Password"> <br>
			<label for="conpassword">Confirm Password:</label>
			<input type="password" name="conpassword" placeholder="Confirm Password"> <br>
			<input type="submit" name="save" value="Save">
			<ul>
				<li><a href="">Cancel</a></li>
			</ul>
		</form>
	</div>

</body>
</html>