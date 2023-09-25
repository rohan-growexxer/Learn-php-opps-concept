<?php

class abc {
    private $name;

    private function showdata($n) {
        $this->name = $n;
    }

    public function __call() {
        echo "This is Prviate or Non Existing Method";
    }

}

$test = new abc();

$test->showdata("Rohan");
$test->hello();

?>