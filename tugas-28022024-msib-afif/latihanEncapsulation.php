<?php

class Barca{
    private $captain;
    private $topScorer;
    private $pelatih;

    public function __construct($captain, $topScorer, $pelatih){
        $this->captain = $captain;
        $this->topScorer = $topScorer;
        $this->pelatih = $pelatih;
    }
    
    public function infoDetail(){
        return "captain: $this->captain, topScorer: $this->topScorer, pelatih: $this->pelatih";
    }
}

$barca24 = new Barca("Ter-Stegen", "Messi", "Koeman");
$barca15 = new Barca("Messi", "Messi", "Luis Enrique");
?>

<!DOCTYPE html>
<html>
<body>
    <h2><?php echo "Barcelona tahun 2024 -> ". $barca24->infoDetail() ?></h2>  
    <h2><?php echo "Barcelona tahun 2015 -> ". $barca15->infoDetail() ?></h2>
</body>
</html>