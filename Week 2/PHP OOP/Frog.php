<?php

class Frog extends Animal {

   public function __construct($name){
      $this->name = $name;
      $this->legs = 4;
      $this->cold_blooded = "true";
   }

   public function jump() {
      echo "Hop-Hop";
   }
}