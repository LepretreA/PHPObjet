<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php 
class utilisateur 
{
    private $Noms;
    private $prenom;

    
    public function seconnecter()
    {
        echo "je suis un USER"
        ?>
        <table border =1px id=tableau>
            <tr>
                <th>utilisateur</th>
            </tr>
            <tr>
                <td><p>-Nom : String</p>
                    <p>-Prenom : String</p></td>
            </tr>
            <tr>
                <td>+seconnecter() : void</td>
            </tr>

        </table>
        <?php     
    }
}
?>  
</body>
</html>