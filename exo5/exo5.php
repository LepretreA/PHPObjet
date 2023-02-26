
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
    $Gentil = new Personnage(2);
    $Mechant = new Personnage (1);

    if(isset($_POST["Soin_Gentil"])){
        $Gentil->Soin();
    }

    if(isset($_POST["Soin_Mechant"])){
        $Mechant->Soin();
    }

    if(isset($_POST["J1->J2"])){
        $Mechant->attack($Gentil);
    }
    
    if(isset($_POST["J2->J1"])){
        $Gentil->attack($Mechant);
    }

    $Gentil->afficheUser();
    $Mechant->afficheUser();
    ?>
    <table border=1>
        <form action="" method="post" >
            <tr>
                <td><input type="submit" name="Soin_Mechant" value="Soin J1"></td>
                <td><input type="submit" name="Soin_Gentil" value="Soin J2"></td>
            </tr>
            <tr>
                <td><input type="submit" name="J1->J2" value="J1 attack J2"></td>
                <td><input type="submit" name="J2->J1" value="J2 attack J1"></td>
            </tr>
        </form>
    </table>
</body>
</html>