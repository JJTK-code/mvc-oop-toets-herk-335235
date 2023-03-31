<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include('read.php'); ?>
    <div class="tabel">
        <table>
            <tr>
            <h1>Men's pund-for-pound top rank ufc</h1>
                <th>Name</th>
                <th>Ranking</th>
                <th>Length</th>
                <th>Weight</th>
                <th>Age</th>
                <th>WinsByKnockout</th>
            </tr>
            <?php echo $tableRows; ?>
        </table>
    </div>
    

</body>
</html>