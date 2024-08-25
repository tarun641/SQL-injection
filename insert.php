<?php
include('db_connection.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $conn->exec($query);
    echo "User '$username' added.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Lab - INSERT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>SQL Injection Lab - INSERT</h1>
    </header>
    <div class="container">
        <form method="post">
            <input type="text" name="username" placeholder="Enter username">
            <input type="text" name="password" placeholder="Enter password">
            <input type="submit" value="Add User">
        </form>
    </div>
</body>
</html>

