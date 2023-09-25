<?php

interface parent1 {
    function sum($a,$b);
}

interface parent2 {
    function sub($a,$b);
}

class parent3 implements parent1,parent2 {
    public function sum($a, $b) {
        echo $a + $b;
    }

    public function sub($a, $b) {
        echo $a - $b;
    }
}

$p3 = new parent3();

echo $p3->sum(30,30) . "\n";
echo $p3->sub(50,10);
?>