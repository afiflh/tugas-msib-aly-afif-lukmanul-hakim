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

$people1 = new people(array(
    "name" => "Afif",
    "age" => "21 tahun",
    "gender" => "Laki-laki"
));

$people2 = new people(array(
    "name" => "Srifa",
    "age" => "20 tahun",
    "gender" => "Perempuan"
));

echo "Halo Kak, selamat datang kakak $people2->name, berusia $people2->age, dan berjenis kelamin $people2->gender";