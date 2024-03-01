<?php

interface Animal{
    public function theSound();
}

class Dog implements Animal{
    public function theSound(){
        return "Guk guk";
    }
}

class Cat implements Animal{
    public function theSound(){
        return "Meow";
    }
}

class Cow implements Animal{
    public function theSound(){
        return "Moo";
    }
}

$dog = new Dog();
$cat = new Cat();
$cow = new Cow();
?>

<html>
<body>
    <h2><?php echo "Dog sound: ". $dog->theSound() ?></h2>  
    <h2><?php echo "Cat sound: ". $cat->theSound() ?></h2>
    <h2><?php echo "Cow sound: ". $cow->theSound() ?></h2>
</body>
</html>