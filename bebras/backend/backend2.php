<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black</title>
</head>
<?php if($_GET['color'] == 'ff1234'): ?>
<body style="background-color:#FF1234">
<?php else: ?>
<body style="background-color:black">

<?php endif ?>
<h1 style="" ><a style="color:aquamarine;text-decoration:none" href="http://localhost/bebras/backend2.php">PYRMAS</a></h1>
<h1 ><a style="color:orange; text-decoration:none" href="http://localhost/bebras/backend2.php" method="get">ANTRAS</a></h1>
<br>
<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">PRESS HARD</button>
</form>
</body>
</html>