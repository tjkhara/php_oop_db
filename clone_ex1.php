<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 19:26
   */

  class Product
  {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
      $this->name = $name;
      $this->color = $color;
    }
  }

  $shirt1 = new Product('hawaian','blue');

  $shirt2 = clone $shirt1; // Making a copy

  $shirt1->color = "Red";

  echo "<pre>";
  print_r($shirt1);
  echo "</pre>";

  echo "<pre>";
  print_r($shirt2);
  echo "</pre>";