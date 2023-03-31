<?php
include('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";
//connect read.php to database php-pdo-crud-herkansing
try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        
    } else {
        echo "Interne server-error";
    }  
} catch (PDOException $e) {
    $e->getMessage();
}

//Haal alle gegevens op uit de database
$sql = "SELECT * FROM PoundForPound;";
$statement = $pdo->prepare($sql);
$statement->execute();


//Zet de opgehaalde gegevens in een array van object
$result = $statement->fetchAll(PDO::FETCH_OBJ);
//var_dump($result);
//echo $result[5]->Voornaam

$tableRows = "";

foreach($result as $info) {
    $tableRows .= "<tr>
                        <td>$info->Name</td>
                        <td>$info->Ranking</td>
                        <td>$info->Length</td>
                        <td>$info->Weight</td>
                        <td>$info->Age</td>
                        <td>$info->WinsByKnockout</td>
                    </tr>";
}
?>