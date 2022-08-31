<?php

class Bicycle {

  //Declare variables and default values if necessary
  var $brand;
  var $model;
  var $year;
  var $description = 'Used bicycle';
  var $weight_kg = 0.0;

  //returns Brand, Model, and Year of object
  function name() {
    return $this -> brand . " " . $this -> model . " (" . $this -> year . ")";
  }

  //returns weight of object in pounds from kilograms
  function weight_lbs() {
    return floatval($this->weight_kg) * 2.2046226218;
  }

  //Converts current weight value from pounds to kilograms
  function set_weight_lbs($value) {
    $this->weight_kg = floatval($value) / 2.2046226218;
  }

}

//New bike example
$trek = new Bicycle;
$trek->brand = 'Trek';
$trek->model = 'Emonda';
$trek->year = '2017';
$trek->weight_kg = 1.0;

//2nd example
$cd = new Bicycle;
$cd->brand = 'Cannondale';
$cd->model = 'Synapse';
$cd->year = '2016';
$cd->weight_kg = 8.0;

//Echo name of new objects to console
echo $trek->name() . "<br />";
echo $cd->name() . "<br />";


//Echo both kilograms and pounds of an object
echo $trek->weight_kg . "<br />";
//Since this uses an established variable, it requires an argument for its method
echo $trek->weight_lbs() . "<br />";

//Create a variable to store the Trek bike's weight in pounds and kilograms and demonstrate both numbers are still available
$trek->set_weight_lbs(2);
echo $trek->weight_kg . "<br />";
echo $trek->weight_lbs() . "<br />";

?>
