<?php

class Animal {
   private $name;
   private $legs;
   private $cold_blooded;

   public function __construct($name){
      $this->name = $name;
      $this->legs = 2;
      $this->cold_blooded = "false";
   }

   public function getName(){
      return $this->name;
   }

   public function getLegs() {
      return $this->legs;
   }

   public function getColdBlooded() {
      return $this->cold_blooded;
   }
}