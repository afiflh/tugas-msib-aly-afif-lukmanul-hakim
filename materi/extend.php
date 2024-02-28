<?php

class people {
    public $name;
    public $age;
    public $gender;


    function __construct($config) {
        $this->name = $config["name"];
        $this->age = $config["age"];
        $this->gender = $config["gender"];
    }

    function get_name() {
        return $this->name;
    }
    
    function get_gender() {
        return $this->gender;
    }   
}

class school extends people {
    public $materi;

    function set_materi($materi) {
        $this->materi = $materi;
    }

    function get_materi() {
        return $this->materi;
    }
}

$sekolah = new school(array(
    "name" => "Afif",
    "age" => "21 tahun",
    "gender" => "Laki-laki"
));
$sekolah->set_materi("PHP");

?>

<html>
<style>
    h1 {
        text-align: center;
        color: yellowgreen;
    }
</style>
<body>
    <h1><?php echo "Halo Kak, selamat datang di kelas ". $sekolah->get_materi() ." kakak $sekolah->name, berusia $sekolah->age, dan berjenis kelamin $sekolah->gender";?></h1>
</body>
</html>

