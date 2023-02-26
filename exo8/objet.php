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
    private $ID;
    private $PDO;

    
    public function __construct($ID){
        $ipServerSQL ="localhost";
        $NomBase = "Combat";
        $UserBDD = "root";
        $PassBDD = "root";
        try {
            $this->PDO = new PDO('mysql:host='.$ipServerSQL.';dbname='.$NomBase.';port=3306',$UserBDD, $PassBDD);
        }catch (Exception $e) {
            echo $e->getMessage();
        }
        $req = "SELECT * FROM Personnage WHERE id =".$ID;
        $RequeteStatement = $this->PDO->query($req);
        
        $UserData = $RequeteStatement->fetch();
            $this->Pseudo=$UserData['Pseudo'];
            $this->Vie=$UserData['Vie'];
            $this->ID=$UserData['ID'];
        }

    public function afficheUser(){
        echo "<p> ".$this->ID."  ".$this->Pseudo."  ".$this->Vie."</p>";
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
        echo "<p>".$this->Pseudo." vient de subir ".$Hit." point de Dégats</p>";
        $this->Vie -= $Hit ;
        $this->ShowLife();
        $this->updateVie();
    }

    public function updateVie(){
        $req = "UPDATE Personnage SET Vie=$this->Vie WHERE id =".$this->ID;
        $RequeteStatement = $this->PDO->query($req);
    }

    public function Soin(){
        $this->Vie = 100;
        echo $this->Pseudo."se soigne a 100%";
        $this->ShowLife();
        $this->updateVie();
    }

    public function Delete(){
        $req = "DELETE FROM Personnage WHERE ID = '".$this->ID."'";
        $RequeteStatement = $this->PDO->query($req);
    }
}
    ?>
</body>
</html>