<?php

class Beasts {

  var $archetype;
  var $ability;
  var $weakness;
  var $region;

  function locate() {
    echo '<br>' . $this->archetype . ' are commonly found in ' . $this->region . '.<br>';
  }

  function guide() {
    echo 'Powers: ' . $this->ability . '<br>Weaknesses: ' . $this->weakness . '<br>';
  }

}

class Dormant extends Beasts {
  var $is_sleeping = true;
}

class Dragonkin extends Beasts {
  var $archetype = 'Dragon';
  var $ability = 'Dragonfire, lightning breath, poison breath, increased defenses';
  var $weakness = 'Dragonbane weaponry, stabbing weapons, anti-fire magic';
  var $wings = 2;
  var $legs = 4;

  function define_dragon() {
    echo 'The ' . strtolower($this->archetype) . 'can be identified by its ' . $this->wings . ' wings and ' . $this->legs . ' legs.';
  }
}

class Wyrm extends Dragonkin {
  var $archetype = 'Wyrm';
  var $wings = 0;
  var $legs = 0;
}

class Drake extends Dragonkin {
  var $archetype = 'Drake';
  var $wings = 0;
  var $legs = 4;
}

class Wyvern extends Dragonkin {
  var $archetype = 'Wyvern';
  var $wings = 2;
  var $legs = 2;
}

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

$dracula = new Dormant;
$dracula->archetype = 'Vampire';
$dracula->ability = 'telepathy, unnatural strength, blood magic';
$dracula->weakness = 'silver weaponry, stakes, garlic';
$dracula->region = 'Southeastern Europe';
echo $dracula->locate();
echo $dracula->guide();

$elvarg = new Dragonkin;
$elvarg->region = 'Eastern Asia';
echo $elvarg->locate();
echo $elvarg->guide();

$eternus = new Wyrm;
$eternus->region = 'Pacific Islands';
echo $eternus->locate();
echo $eternus->guide();

$raksha = new Drake;
$raksha->region = 'African Coast';
echo $raksha->locate();
echo $raksha->guide();

$ekzyke = new Wyvern;
$ekzyke->region = 'Arctic Caverns';
echo $ekzyke->locate();
echo $ekzyke->guide();

