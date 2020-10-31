<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>

<?php

	// Check for form subbmission
	if (isset($_POST['submit'])) {

		$errors = array();
		
		// Check if the username and password has been entered
		if (!isset($_POST['email']) || strlen(trim($_POST['email']))<1) {
			$errors[] = 'Username is Missing / Invalid';
		}

		if (!isset($_POST['password']) || strlen(trim($_POST['password']))<1) {
			$errors[] = 'Password is Missing / Invalid';
		}


		// Check if there any errors in the form
		if (empty($errors)) {

			// Save username and password into variables
			$email = mysqli_real_escape_string($connection, $_POST['email']);
			$password = mysqli_real_escape_string($connection, $_POST['password']);
			//$hashed_password = sha1($password);

			// Prepare database query
			$query = "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}' LIMIT 1";

			$result_set = mysqli_query($connection, $query);

			if ($result_set) {
				// Query succesful

				if (mysqli_num_rows($result_set) == 1) {
					// Valid user found
					$user = mysqli_fetch_assoc($result_set);
					$_SESSION['user_id'] = $user['id'];
					$_SESSION['first_name'] = $user['first_name'];
					// Redirect to user_list.php
					header('Location: user_list.php');
				}

				else {
					// Username and password invalid
					$errors[] = 'Invalid Username / Password';
				}
			}

			else{
				$errors = 'Database query failed';
			}
		}			
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Log In</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>

	<div class="login">
		<form action="index.php" method="post">
			<fieldset>
				<legend>
					<h1>Login</h1>
				</legend>

				<?php
					if (isset($errors) && !empty($errors)) {
						echo '<p class="error">Invalied Username / Password';
					}
				?>

				<p>
					<label for="">Username:</label>
					<input type="text" name="email" id="" placeholder="Email Address">
				</p>

				<p>
					<label for="">Password</label>
					<input type="password" name="password" id="" placeholder="Password">
				</p>

				<p>
					<button type="submit" name="submit">Login</button>
				</p>
			</fieldset>
		</form>
	</div>

</body>
</html>

<?php mysqli_close($connection); ?>