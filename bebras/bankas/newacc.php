<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nauja sąskaita</title>
</head>
<body>

<div>
    <form action="list.php" method="post">
    <input type="text" name="vardas" placeholder="Jūsų vardas"><br>
    <input type="text" name="pavarde" placeholder="Jūsų pavardė"><br>
    <input type="text" name="ak" placeholder="Jūsų asmens kodas"><br>
    <div style="padding-top:15px;"><button type="submit" class="btn">Create that Account!</button></div>
    </form>
</div>

<?php




?>
<div class="a-linkai">
<a href="http://localhost/bebras/bankas/addmoney.php">Pridėti lėšų</a>
<a href="http://localhost/bebras/bankas/withdraw.php">Nuimti lėšų</a>
<a href="http://localhost/bebras/bankas/newacc.php">Nauja sąskaita</a>
<a href="http://localhost/bebras/bankas/list.php">Sąskaitų sąrašas</a>
</div>
</body>
</html>