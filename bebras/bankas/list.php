<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Banko sąskaitų sąrašas</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>
  
<?php


class Account {
    public $name;
    public $surname;
    public $ak;
    public $balance = 0;
    public $accno = "LT2157518";
    
    // public function IBAN() {
    //     global $accno;
    //     $i = 9;
    //     while ($i < 20) {
    //     $accno .= rand(0,9);
    //     $i++;
    //     }
    // }

    public function __construct($vardas, $pavarde, $ak) {
        $this->name = $vardas;
        $this->surname = $pavarde;
        $this ->ak = $ak;
        echo '<br><h2>New account has been created successfully!</h2>';
        $i = 9;
        while ($i < 20) {
        $this->accno .= rand(0,9);
        $i++;
        echo"<br>$this->accno";
        }
    }



    public function getName()
    {
        return $this->name;
    }


}

$accList = json_decode(file_get_contents('./List.json')) ?? [];
if(isset($_POST) && isset($_POST['vardas']) && isset($_POST['pavarde']) && isset($_POST['ak'])) {
    $naujaSaskaita = new Account($_POST['vardas'], $_POST['pavarde'], $_POST['ak']);
    array_push($accList, $naujaSaskaita);
    $saskJSON = json_encode($accList);
    file_put_contents('List.json', json_encode($accList));
    
    // $saskSar = fopen("List.json", "w") or die("Unable to open file!");
    // fwrite($saskSar, $saskJSON);
    // fclose($saskSar);

}

$accList2 = json_decode(file_get_contents('./List.json'));
?>

<h2>This is the whole account list: </h2>

<table>
                <tr>
                    <td>Sąskaitos nr</td>
                    <td>Vardas</td>
                    <td>Pavardė</td>
                    <td>Asmens kodas</td>
                    <td>Balansas</td>
                    <td>Pridėti manių</td>
                    <td>Nuskaityti manių</td>
                    <td>Ištrinti nx</td>
                </tr>  



<?php foreach ($accList2 as $unit) :?>
<tr>
    <td><?= $unit->accno ?></td>
    <td><?= $unit->name ?></td>
    <td><?= $unit->surname ?></td>
    <td><?= $unit->ak ?></td>
    <td><?= $unit->balance ?></td>
    <td><button><a href="http://localhost/bebras/bankas/addmoney.php?add=<?= $unit->accno ?>" method="post">Pridėti</a></button></td>
    <td><button><a href="http://localhost/bebras/bankas/withdraw.php?withdraw=<?= $unit->accno ?>" method="post">Nuskaityti</a></button></td>
    <td><form action="http://localhost/namudarbai/bank/delete.php?clientACC=<?=$client['account']?>" method="post" type="submit"><button>Ištrinti</button></td>
                            
</tr>
<?php endforeach ?>
</table>





<a href="http://localhost/bebras/bankas/addmoney.php">Pridėti lėšų</a>
<a href="http://localhost/bebras/bankas/withdraw.php">Nuimti lėšų</a>
<a href="http://localhost/bebras/bankas/newacc.php">Nauja sąskaita</a>
<a href="http://localhost/bebras/bankas/list.php">Sąskaitų sąrašas</a>
</body>
</html>



