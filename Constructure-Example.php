<?php

class person {

    public $name;

    function __construct($n){
        $this->name = $n;
    }

    function show() {
        echo "Your Name:" . $this->name;
    }
}

$p1 = new person("Rohan Shah");

$p1->show();

?>