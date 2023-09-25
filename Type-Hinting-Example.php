<?php

class Hello {
    public function sayHello() {
        echo "Hello!!";
    }
}

class bye {
    public function sayBye() {
        echo "Bye!!";
    }
}

function wow(hello $c) {
    $c->sayHello();
}

$test = new bye();
wow($test);

?>