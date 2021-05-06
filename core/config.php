<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lalakucatalog";

$homeurl = $_SERVER['SERVER_NAME'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<h5 hidden>Connected to database</h5><br>";
} catch(PDOException $e) {
    // echo $e->getMessage();
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// $conn = null;
?>