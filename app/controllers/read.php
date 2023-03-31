<?php


$dbHost = 'localhost';
$dbName = 'mvc-oop-toets-herk';
$dbUser = 'root';
$dbPass = '';

$conn = new mysql($dbHost, $dbName, $dbUser, $dbPass);

if ($conn->connect_error) {
    die("Verbinding met databank mislukt: " . $conn->connect_error);
}

$sql = "SELECT * FROM poundforpound";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
    }
}