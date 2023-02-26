
<?php
    Include ("objet.php");
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
    $ipServerSQL ="localhost";
    $NomBase = "Combat";
    $UserBDD = "root";
    $PassBDD = "root";
    try {
        $PDO = new PDO('mysql:host='.$ipServerSQL.';dbname='.$NomBase.';port=3306',$UserBDD, $PassBDD);
    }catch (Exception $e) {
        echo $e->getMessage();
    }
    $req = "SELECT * FROM Personnage";
    $RequeteStatement = $PDO->query($req);
    
    $Tableau=Array();

    while($UserData = $RequeteStatement->fetch()){
        $Personnage= new Personnage($UserData["ID"]);
        array_push($Tableau, $Personnage);
    }

    foreach($Tableau as $Personnage){
        $Personnage->afficheUser();
    }
    
   ?>
</body>
</html>