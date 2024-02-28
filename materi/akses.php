<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function set_name($n) {
        $this->name = $n;
    }
    
    public function set_color($n) {
        $this->color = $n;
    }

    public function set_weight($n) {
        $this->weight = $n;
    }

    public function get_color() {
        return $this->color;
    }

    public function get_weight() {
        return $this->weight;
    }
}

$mango = new Fruit();
$mango->set_name("Mangga");
$mango->set_color("Hijau");
$mango->set_weight("300");

echo "Buah " . $mango->name . " berwarna " . $mango->get_color() . " dan beratnya " . $mango->get_weight() . " gram.";
?>
