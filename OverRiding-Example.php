<?php

class base {
    public $name = "Parent Class";
}

class derived extends base {
    public $name = "Child Class";

}

$b = new base();
echo $b->name . "\n";

$d = new derived();
echo $d->name;
?>