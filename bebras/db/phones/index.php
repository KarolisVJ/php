<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best ever</title>
</head>
<body>
    <h1>Add a champion</h1>
    <form method="post" action="">
    Name: <input type="text" name="name">
    Year: <input type="text" name="year">
    Best Player: <input type="text" name="bestplayer">
    Type: <input type="text" name="type">
    <input type="hidden" name="action" value="add">
    <button type="submit" name="">ADD</button>
    </form>
    <hr>
    <h1>Delete the unnecessary</h1>
    <form method="post" action="">
    Year: <input type="text" name="year">
    <input type="hidden" name="action" value="delete">
    <button type="submit" name="">Delete</button>
    </form>

    <hr>

<?php

$host = '127.0.0.1';
$db   = 'champions';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $options);

$sql = "SELECT callem.id as aidy, `name`, `phoneno`, phones.id as paidy
FROM callem
RIGHT JOIN phones
ON callem.id = phones.beast_id
";

$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
{
    echo $row['aidy'] . ' - '.$row['paidy']. ' '.$row['name'].' '.$row['phoneno'].'<br>';
}


?>

</body>
</html>