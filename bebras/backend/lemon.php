<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black</title>
</head>
<body style="background-color:#fff700">
<?php 
if(isset($_GET)) {
    header('Location: http://localhost/bebras/backend/orange.php');
} ?>

<h1><a style="color:aquamarine; text-decoration:none" href="http://localhost/bebras/backend3.php">PYRMAS</a></h1>
<h1><a style="color:orange; text-decoration:none" href="http://localhost/bebras/backend3.php">ANTRAS</a></h1>
<br>
<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">PRESS HARD</button>
</form>
</body>
</html>