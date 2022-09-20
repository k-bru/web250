<?php

class Bird {
  public static $instance_count = 0;

  var $commonName;
  var $habitat;
  var $nestPlacement;
  var $clutchSize;
  var $food;
  var $conservationLevel;
  var $song = "Hey, I'm a bird, forget about it.";
  protected static $flying = "yes";

  public const HABITATS = ["North America", "South America", "Africa", "Asia", "Australia", "Europe"];

  public static function create() {
    $className = get_called_class();
    $obj = new $className;
    self::$instance_count++;
    return $obj;
  }

  public static function can_fly() {
    if ( static::$flying == "yes" ) {
      $flying_string = "can fly";
    } else {
      $flying_string = "is stuck on the ground";
    }
    return  $flying_string ;
  }

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

class YellowBelliedFlyCatcher extends Bird {
  var $name = "yellow-bellied flycatcher";
  var $diet = "mostly insects.";
  var $song = "flat chilk";
}

class Kiwi extends Bird {
  var $name = "kiwi";
  var $diet = "omnivorous";
  protected static $flying = "no";
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

//Static challenge
//Show that instance count is functional
echo "Bird count: " . Bird::$instance_count . "<br>";
echo "Kiwi count: " . Kiwi::$instance_count . "<br>";

//Create new instances
$createBird = Bird::create();
$createKiwi = Kiwi::create();

echo "Bird count(after creation): " . Bird::$instance_count . "<br>";
echo "Kiwi count(after creation): " . Kiwi::$instance_count . "<br>";

echo "<hr>";
//Demonstrate use of constant variable
echo "Habitats: " . implode(", ", Bird::HABITATS) . "<br>";
$bird1->habitat = Bird::HABITATS[0];
echo "Habitats for " . $bird1->commonName . ": " . $bird1->habitat . "<br>";
echo "<hr>";
