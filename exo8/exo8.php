<?php 
    Include "objet.php";
    $ipServerSQL ="localhost";
    $NomBase = "Combat";
    $UserBDD = "root";
    $PassBDD = "root";
    try {
        $PDO = new PDO('mysql:host='.$ipServerSQL.';dbname='.$NomBase.';port=3306',$UserBDD, $PassBDD);
    }catch (Exception $e) {
        echo $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['ID'])){
        $Personnage = new Personnage($_POST['ID']);
        $Personnage->Delete();
    }
    ?>
    <form action="" method="POST">
    <select name = "ID"  required>
        <?php
        $req = "SELECT * FROM Personnage";
        $RequeteStatement = $PDO->query($req);
        while($UserData = $RequeteStatement->fetch()){
            echo "'<option value=".$UserData['ID'].">".$UserData['Pseudo']."</option>";
        }
        ?>
    </select>
    <input type="submit" name="Submit" value="Delete"> 
    </form>
</body>
</html>