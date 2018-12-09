<?php

  function my_autoload($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
      include '../private/classes/' . $class . '.class.php';
    }
  }
  spl_autoload_register('my_autoload');

  $args =
    [
      'brand'=>'Trek',
      'model'=>'Emonda',
      'year'=>'2017',
      'category'=>'Hybrid',
      'gender' => 'Unisex',
      'color' => 'Black',
      'weight_kg' => 1.5,
      'condition' => 5,
      'price' => 1495.00
    ];

  $b1 = new Bicycle($args);

  echo $b1->condition($b1->condition);

?>