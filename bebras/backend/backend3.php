<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black</title>
</head>
<?php if(isset($_GET['color'])): ?>
<body style="background-color:#<?=$_GET['color'];?>">
<?php else: ?>
<body style="background-color:#ff1569">

<?php endif ?>

<h1><a style="color:aquamarine; text-decoration:none" href="http://localhost/bebras/backend3.php">PYRMAS</a></h1>
<h1><a style="color:orange; text-decoration:none" href="http://localhost/bebras/backend3.php">ANTRAS</a></h1>
<br>
<form action="" method="get">
    <input type="text" name="color">
    <button type="submit">PRESS HARD</button>
</form>
</body>
</html>