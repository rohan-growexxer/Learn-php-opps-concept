<?php

class calculation{
    public $a, $b, $c;

    function sum() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function subtraction() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }

    function multiplication() {
        $this->c = $this->a * $this->b;
        return $this->c;
    }

    function division() {
        $this->c = $this->a / $this->b;
        return $this->c;
    }
}

$c1 = new calculation();

$c1->a = 20;
$c1->b = 10;

echo "Sum is : " . $c1->sum() . "\n";
echo "Subtraction is : " . $c1->subtraction() . "\n";
echo "Multiplication is : " . $c1->multiplication() . "\n";
echo "Division is : " . $c1->division() . "\n";

?>