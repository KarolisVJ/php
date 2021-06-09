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


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['action'] == 'delete') {
    print_r($_POST); echo'<br>';    

        $sql = 
        "DELETE FROM `the winners`
        WHERE `year` = ?
        ";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['year']]);



        // $pdo->query($sql); // kverinam
    }
    if ($_POST['action'] == 'add') {

        $sql = 
        "INSERT INTO `the winners` (`name`, `year`, `bestplayer`, `type`)
        VALUES (?, ?, ?, ?)
        ";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([$_POST['name'], $_POST['year'], $_POST['bestplayer'],$_POST['type']   ]);


        // $pdo->query($sql); // kverinam labai blogai
    }

    header('Location: http://localhost/bebras/db/form/');
    exit;

}


$sql = 'SELECT `name`, `year`, `bestplayer`, `type` FROM `the winners`';

$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
{
    echo $row['name'] . ' '.$row['year'].' '.$row['bestplayer'].' '.$row['type'].'<br>';
}

?>

</body>
</html>