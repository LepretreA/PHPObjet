<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("objet.php"); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
    $MonObjectUtilisateur1 = new utilisateur();

    $MonObjectUtilisateur1->seconnecter();
  ?>
</body>
</html>