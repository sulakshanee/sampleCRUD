<?php require_once('inc/connection.php'); ?>
<?php
	//Checking if a user is logged in
	if (!isset($_SESSION['user_id'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User List Page</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<header>
		<div class="appname">User Management System</div>
		<div class="loggedin">Welcome <?php echo $_SESSION['first_name']; ?>  <a href="logout.php">Log Out</a>
		</div>
	</header>
</body>
</html>