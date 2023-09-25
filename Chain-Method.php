<?php

class abc {
    public function a {
        echo "a";
    }

    public function b {
        echo "b";
    }

    public function a {
        echo "b";
    }
}

$abc = new abc();

echo $abc->a()->b()->c();
?>