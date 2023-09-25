<?php

class abc{
    public $name;
    public $age;
  
    public function showdata($name,$age) {
      $this->name = $name;
      $this->age = $age;
    }

    public function __unset($property) {
        unset($this->$property)
    }
}
  

  $test = new abc(); 
  $test->name = "Rohan";
  $test->salary = 100;

  echo isset($test->name);
  echo unset($test->name);
  echo isset($test->salary);
?>
