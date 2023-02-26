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
    
class Personnage 
{
    public $Pseudo;
    public $Vie;

    
    public function __construct($Pseudo){
        $this->Pseudo=$Pseudo;
        $this->Vie=100;
    }

    public function afficheUser(){
        echo "<p>".$this->Pseudo."  ".$this->Vie."</p>";
    } 

    public function ShowLife(){
        echo "<p>".$this->Pseudo." a actuellement ".$this->Vie." Point de Vie</p>";
    } 

    public function attack($Personnage){
        echo "<p>".$this->Pseudo." lance une attaque sur ".$Personnage->Pseudo."</p>";
        $Personnage->defense(50);
    }

    public function defense($Valattack){
        $Hit = $Valattack-rand(0,20);
        echo "<p>".$this->Pseudo." vient de subir".$Hit."point de Dégats</p>";
        $this->Vie -= $Hit ;
        $this->ShowLife();
    }
}

    ?>
</body>
</html>