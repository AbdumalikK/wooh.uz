<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "lalakucatalog";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE lalakucatalog";
    $conn->exec($sql);
    echo "<h5>Database created successfully</h5>";
    
} catch(PDOException $e) {
    // echo $sql . "<br>" . $e->getMessage();
    header("location: ../index.php");
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql2 = "CREATE TABLE contact (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(50),
        comment VARCHAR(100) NOT NULL,
        message_date VARCHAR(20) NOT NULL
        )";
    
    $conn->exec($sql2);
    echo "<h5>Table created successfully</h5><br>";
    
} catch(PDOException $e) {
    // echo "<br>" . $sql2 . "<br>" . $e->getMessage();
    header("location: ../index.php");
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn = null;
?>