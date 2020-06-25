<?php

class Ape extends Animal {

   public function __construct($name){
      $this->name = $name;
      $this->legs = 4;
      $this->cold_blooded = "false";
   }

   public function yell() {
      echo "Auooo";
   }
}