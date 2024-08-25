<?php
include('db_connection.php');

if (isset($_POST['username']) && isset($_POST['newpassword'])) {
    $username = $_POST['username'];
    $newpassword = $_POST['newpassword'];
    $query = "UPDATE users SET password = '$newpassword' WHERE username = '$username'";
    $conn->exec($query);
    echo "Password for '$username' updated.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Lab - UPDATE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>SQL Injection Lab - UPDATE</h1>
    </header>
    <div class="container">
        <form method="post">
            <input type="text" name="username" placeholder="Enter username">
            <input type="text" name="newpassword" placeholder="Enter new password">
            <input type="submit" value="Update Password">
        </form>
    </div>
</body>
</html>

