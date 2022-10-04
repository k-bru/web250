<?php

class Bird {

  public $commonName;
  public $habitat;
  public $food;
  public $nestPlacement;
  public $behavior;
  protected $conservation_id;
  public $backyardTips;

  protected const CONSERVATION = [
    1 => 'Low',
    2 => 'Moderate',
    3 => 'High',
    4 => 'Extreme',
  ];

  //Function for constructing class objects
  public function __construct($args=[]) {
    $this -> commonName = $args['commonName'] ?? '';
    $this -> habitat = $args['habitat'] ?? '';
    $this -> food = $args['food'] ?? '';
    $this -> nestPlacement = $args['nestPlacement'] ?? '';
    $this -> behavior = $args['behavior'] ?? '';
    $this -> conservation_id = $args['conservation_id'] ?? 1;
    $this -> backyardTips = $args['backyardTips'] ?? '';

    foreach($args as $k => $v) {
      if(property_exists($this, $k)) {
        $this->$k = $v;
      }
    }
  }

  //Function for condition id checks/fallback
  public function conservation() {
    if ($this -> conservation_id > 0) {
      return self::CONSERVATION[$this -> conservation_id];
    } else {
      return "Unknown";
    }
  }
}

?>
