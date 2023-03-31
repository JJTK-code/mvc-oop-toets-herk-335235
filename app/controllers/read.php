<?php


require "config.php";

$conn = new mysql($dbHost, $dbName, $dbUser, $dbPass);

if ($conn->connect_error) {
    die("Verbinding met databank mislukt: " . $conn->connect_error);
}

$sql = "SELECT * FROM poundforpound";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?$echo $row["Name"]</td>
            <td><?$echo $row["Ranking"]</td>
            <td><?$echo $row["Length"]</td>
            <td><?$echo $row["Weight"]</td>
            <td><?$echo $row["Age"]</td>
            <td><?$echo $row["WinsByKnockout"]</td>
        </tr>
    }
}