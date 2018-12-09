<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 18:50
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

  $shirt = new Product("hawai","orange");
  echo "<pre>";
  print_r($shirt);
  echo "</pre>";