<?php
$dbHost = 'localhost';
$dbName = 'mvc-oop-toets';
$dbUser = 'root';
$dbPass = '';

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding met de mysql server";
    } else {
        echo "Er is een interne server error opgetreden"; 
    }
} catch(PDOException $e) {
    echo $e->getMessage();
}

$sql = "SELECT Id
              ,Naam
              ,NettoWaarde
              ,Land
              ,Mobiel
              ,Leeftijd
        FROM Zangeres";

$mysqli_result = $pdo-> query($sql);


?>
<h3>Top 5 rijkse zangaressen ter wereld</h3>

<table border='1'>
    <thead>
        <th>Naam<?php $mysqli_result ?></th>
        <th>NettoWaarde</th>
        <th>Land</th>
        <th>Mobiel</th>
        <th>Leeftijd</th>
    </thead>
    <tbody>
    </tbody>
</table>