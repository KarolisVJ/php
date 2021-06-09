<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Black</title>
</head>
<?php if($_GET['color'] == '1'): ?>
<body style="background-color:red">
<?php else: ?>
    <body style="background-color:black">

<?php endif ?>
<h1 style="" ><a style="color:aquamarine;text-decoration:none" href="http://localhost/bebras/backend/backend.php">PYRMAS</a></h1>
<h1 ><a style="color:orange; text-decoration:none" href="http://localhost/bebras/backend/backend.php?color=1">ANTRAS</a></h1>
    
</body>
</html>

<!-- <?php if($petras > $jonas): ?>
<h2>Laimėjo Petras. Valio Petrui!</h2>
<?php elseif($petras < $jonas): ?>
<h2>Laimėjo Jonas. Ura Jonui!</h2>
<?php else: ?>
<h2>Visi pralošė. Niekam ne Valio.</h2>
<?php endif ?> -->