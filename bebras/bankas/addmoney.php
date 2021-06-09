<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pridėt pinigų</title>
</head>
<body>
  
<?php

session_start();
$users = json_decode(file_get_contents('./List.json'));
$acc = $_GET['add'];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach($users as $user) {
        if ($user->accno == $acc) {
            $val = $_POST['add'];
            if ($val <= 0) {
                $_SESSION['message'] = "Prie sąskaitos nieko nepridėta!";
                $_SESSION['add'] = 0;
                $_SESSION['msg_type'] = 'error';
                
                echo"Keep echoing, blet";
                header("Location: http://localhost/bebras/bankas/list.php");
                die;
            } else {
                $fullName = $user->name . ' ' . $user->surname;
                $val = $_POST['add'];
                $user->balance += $_POST['add'];
                $_SESSION['message'] = "$fullName Sąskaita papildyta $val eur!";
                $_SESSION['add'] = 1;
                $_SESSION['msg_type'] = 'ok';
                file_put_contents('./List.json', json_encode($users));
                header('Location: http://localhost/bebras/bankas/list.php');
                die;
            }
        }   
    }

}

?>

<form action="" method="post">
    <label for="quantity" >Įrašykite norimą pridėti sumą:</label>
    <input type="number" id="quantity" name="add">
    <button class="submit-button" type="submit">Papildyti sąskaitą</button>
</form>
<br><br>
<a href="http://localhost/bebras/bankas/addmoney.php">Pridėti lėšų</a>
<a href="http://localhost/bebras/bankas/withdraw.php">Nuimti lėšų</a>
<a href="http://localhost/bebras/bankas/newacc.php">Nauja sąskaita</a>
<a href="http://localhost/bebras/bankas/list.php">Sąskaitų sąrašas</a>
</body>
</html>