<?php

class person {
    public $name;
    public $age;
   
    function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }

    function info() {
        echo "Person Name: " . $this->name . "\n";
        echo "Person Age: " . $this->age;
    }
}

class manager extends person {}

$m1 = new manager("Rohan Shah","24");
$m1->info();

?>