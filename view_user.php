<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php
    // Checking if a user is logged in
    if (!isset($_SESSION['user_id'])) {
        header('Location: index.php');
    }

    $user_list = '';

    // Grtting the list of users
    $query = "SELECT * FROM user WHERE is_deleted = 0 ORDER BY first_name";
    $users = mysqli_query($connection , $query);

    if ($users) {
        
        while ($user = mysqli_fetch_assoc($users)) {
            $user_list .= "<tr>";
            $user_list .= "<td>{$user['first_name']}</td>";
            $user_list .= "<td>{$user['last_name']}</td>";
            $user_list .= "<td>{$user['last_login']}</td>";
            $user_list .= "<td><a href=\"modify_user.php?user_id={$user['id']}\">Edit</a></td>";
            $user_list .= "<td><a href=\"delete_user.php?user_id={$user['id']}\">Delete</a></td>";
            $user_list .= "</tr>";
        }
    }

    else{
        echo "Database query failed.";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
</head>
<body>

    <?php include('top_bar.php'); ?>

    <main>
        <h1>Users  <span><a href="add_user.php">+ Add new user</a></span></h1>
    
        <table class="userlist">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Last Login</th>
                <th>Edit User</th>
                <th>Delete User</th> 
            </tr>

            <?php echo $user_list; ?>
        </table>
    </main>
    
</body>
</html>