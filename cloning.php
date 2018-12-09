<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 19:36
   */

  class Beverage
  {
    public $name;

    function __construct()
    {
      echo "New beverage was created. " . "<br>";
    }

    function __clone()
    {
      echo "Existing beverage was copied. " . "<br>";
    }
  }

  $a = new Beverage();
  $a->name = "coffee";
  echo $a->name . "<br>";

  echo "<hr>";

  $b = clone $a;
  echo $a->name . "<br>";
  echo $b->name . "<br>";

  $b->name = "tea";

  echo "<pre>";
  print_r($a);
  echo "</pre>";
  echo "<pre>";
  print_r($b);
  echo "</pre>";