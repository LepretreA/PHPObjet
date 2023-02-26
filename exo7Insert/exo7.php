<?php 
    Include "objet.php";
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
    if(isset($_POST['Pseudo'])){
        $Personnage = new Personnage($_POST['Pseudo']);
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="Pseudo" placeholder="Balance ton blaze">
        <input type="submit" name="Submit" value="Ask"> 
    </form>
</body>
</html>