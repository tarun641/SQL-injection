<?php
include('db_connection.php');

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $query = "DELETE FROM users WHERE username = '$username'";
    $conn->exec($query);
    echo "User '$username' deleted.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Lab - DELETE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>SQL Injection Lab - DELETE</h1>
    </header>
    <div class="container">
        <form method="post">
            <input type="text" name="username" placeholder="Enter username to delete">
            <input type="submit" value="Delete">
        </form>
    </div>
</body>
</html>

