<?php

// superclass
class Beasts {

  public $archetype;
  public $ability;
  public $weakness;
  public $region;

  protected $beast_id;

  public function locate() {
    echo '<br>' . $this->archetype . ' are commonly found in ' . $this->region . '.<br>';
  }

  public function guide() {
    echo 'Powers: ' . $this->ability . '<br>Weaknesses: ' . $this->weakness . '<br>';
  }

  private function hello_beast() {
    return 'Hello beast!';
  }

}

// sleeping beasts
class Dormant extends Beasts {
  public $is_sleeping = true;
}

// dragonkin beasts
class Dragonkin extends Beasts {
  public $archetype = 'Dragon';
  public $ability = 'Dragonfire, lightning breath, poison breath, increased defenses';
  public $weakness = 'Dragonbane weaponry, stabbing weapons, anti-fire magic';

  public function setWings($wings) {
    $this->wings = $wings;
  }
  public function setLegs($legs) {
    $this->legs = $legs;
  }

  public function getLimbs() {
    echo '<br>The ' . strtolower($this->archetype) . ' can be identified by its ' . $this->wings . ' wings and ' . $this->legs . ' legs.';
  }
}

//dragonkin subclasses
class Wyrm extends Dragonkin {
  public $archetype = 'Wyrm';
}

class Drake extends Dragonkin {
  public $archetype = 'Drake';
}

class Wyvern extends Dragonkin {
  public $archetype = 'Wyvern';
}

//display classes
function inspect_class($class_name) {
  $output = '';

  $output .= $class_name;
  $parent_class = get_parent_class($class_name);
  if($parent_class != '') {
    $output .= " extends {$parent_class}";
  }
  $output .= "\n";

  $class_vars = get_class_vars($class_name);
  ksort($class_vars);
  $output .=  "properties: \n";
  foreach($class_vars as $k => $v) {
    $output .=  "- {$k}: {$v}\n";
  }

  $class_methods = get_class_methods($class_name);
  sort($class_methods);
  $output .=  "methods: \n";
  foreach($class_methods as $k) {
    $output .=  "- {$k}\n";
  }

  return $output;
}

$class_names = ['Beasts', 'Dormant', 'Dragonkin', 'Wyrm', 'Drake', 'Wyvern'];
foreach($class_names as $class_name) {
  echo nl2br(inspect_class($class_name));
  echo '<br>';
}

//new Dormant vampire
$dracula = new Dormant;
$dracula->archetype = 'Vampire';
$dracula->ability = 'telepathy, unnatural strength, blood magic';
$dracula->weakness = 'silver weaponry, stakes, garlic';
$dracula->region = 'Southeastern Europe';
echo $dracula->locate();
echo $dracula->guide();

//Dragonkins using sets/gets
$elvarg = new Dragonkin;
$elvarg->setWings(2);
$elvarg->setLegs(4);
$elvarg->getLimbs();
$elvarg->region = 'Eastern Asia';
$elvarg->locate();
$elvarg->guide();

$eternus = new Wyrm;
$eternus->setWings(0);
$eternus->setLegs(0);
$eternus->getLimbs();
$eternus->region = 'Pacific Islands';
$eternus->locate();
$eternus->guide();

$raksha = new Drake;
$raksha->setWings(0);
$raksha->setLegs(4);
$raksha->getLimbs();
$raksha->region = 'African Coast';
$raksha->locate();
$raksha->guide();

$ekzyke = new Wyvern;
$ekzyke->setWings(2);
$ekzyke->setLegs(2);
$ekzyke->getLimbs();
$ekzyke->region = 'Arctic Caverns';
$ekzyke->locate();
$ekzyke->guide();
