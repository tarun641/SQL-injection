<?php
include('db_connection.php');

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch()) {
            echo "ID: " . $row['id'] . " - Username: " . $row['username'] . " - Password: " . $row['password'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Injection Lab - SELECT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>SQL Injection Lab - SELECT</h1>
    </header>
    <div class="container">
        <form method="get">
            <input type="text" name="username" placeholder="Enter username">
            <input type="submit" value="Search">
        </form>
    </div>
</body>
</html>

