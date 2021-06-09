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


$sql = 'SELECT `name`, `year`, `bestplayer`, `type` FROM `the winners`';

$stmt = $pdo->query($sql);
while ($row = $stmt->fetch())
{
    echo $row['name'] . ' '.$row['year'].' '.$row['bestplayer'].' '.$row['type'].'<br>';
}


//create

$eskuel = "INSERT INTO `the winners` (`name`, `year`, `bestplayer`, `type`)
VALUES ('Golden State Barriors', 2018, 'Kevin Durant', 2)";

$pdo->query($eskuel);

//delete

$eskuel = "DELETE FROM `the winners` 
WHERE `bestplayer` = 'Kevin Durant' AND `id`>15";
$pdo->query($eskuel);

//Update

$eskuel = "UPDATE `the winners`
SET `name` = 'Golden State Warriors'
WHERE `name` = 'Golden State Barriors'
";

$pdo->query($eskuel);