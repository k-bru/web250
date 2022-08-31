<?php

class Bird {

  //Declare variables
  var $commonName;
  var $habitat;
  var $nestPlacement;
  var $clutchSize;
  var $food;
  var $conservationLevel;
  var $song;

  //Bird song method
  function birdSong() {
    return ($this->song) . "<br>";
  }

  //Create descriptions
  //implode arrays for formatting
  function birdDescription() {
    return "The " . $this->commonName . "is found in " . $this->habitat . ".<br> Their nests can be found in the following places: " . implode(", ", $this->nestPlacement) . ".<br> Their clutch size is typically " . $this->clutchSize . ".<br> Their normal diet consists of the following: " . implode(", ", $this->food) . ".<br> Their level of concern for conservation is " . $this->conservationLevel . ".<br><br> ";
  }
}

//First bird declarations
$bird1 = new Bird;
$bird1->commonName = "Eastern Towhee";
$bird1->habitat = "Eastern North America";
$bird1->nestPlacement = ["ground"];
$bird1->clutchSize = "2-6 eggs";
$bird1->food = ["seeds", "fruits", "insects", "spiders"];
$bird1->conservationLevel = "low";
$bird1->song = "drink-your-tea!";

//Second bird declarations
$bird2 = new Bird;
$bird2->commonName = "Indigo Bunting";
$bird2->habitat = "North and South America";
$bird2->nestPlacement = ["fields", "edges of woods", "roadsides", "railroads"];
$bird2->clutchSize = "3-4 eggs";
$bird2->food = ["small seeds", "berries", "buds", "insects"];
$bird2->conservationLevel = "low";
$bird2->song = "what! what!";

//Echo song and descriptions
echo $bird1->birdSong();
echo $bird1->birdDescription();

echo $bird2->birdSong();
echo $bird2->birdDescription();

