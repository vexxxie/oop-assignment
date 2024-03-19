<?php
class ComputerClass {
     public $computer;

     function __construct() {

     }

     // Methods
     function setDefinition($computer) {
          $this->computer = $computer;
     }
     
     function getDefinition() {
          return $this->computer;
     }

}


?>