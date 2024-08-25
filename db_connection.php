<?php
$host = 'localhost';
$dbname = 'sql_injection_lab';
$username = 'tarun';
$password = 'P@ssw0rd';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

