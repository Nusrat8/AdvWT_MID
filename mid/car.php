<?php
    
  class Car {
        public $engineNo;
        public $model;
        public $owner;

  function __construct($engineNo,$model,$owner) {
      $this->engineNo = $engineNo;
      $this->model = $model;
      $this->owner = $owner;
  }
        
  function get_EngineNo() {
    return $this->engineNo;
  }

  function get_Model() {
    return $this->model;
  }
        
  function get_Owner() {
    return $this->owner;
  }

}

$CarInfo = new Car( "V8-0089", "Toyota Axio 2016 Hybrid" , "David" );
    echo "Car Information :::::: <br>";
    echo "Car Engine No : ";
    echo $CarInfo->get_EngineNo();
    echo "<br>";
    echo "Car Model No : ";
    echo $CarInfo->get_Model();
    echo "<br>";
    echo "Car Owner Name : ";
    echo $CarInfo->get_Owner();
    
    
?>