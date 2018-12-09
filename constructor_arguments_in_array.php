<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 18:54
   */
  class Product
  {
    public $name;
    public $color;
    public $price;

    public function __construct($args=[])
    {
      $this->name = $args['name'] ?? NULL;
      $this->color = $args['color'] ?? NULL;
      $this->price = $args['price'] ?? NULL;
    }
  }

  $shirt = new Product(['name' => 'T-shirt', 'color' => 'blue', 'price'=>9.99]);
  echo "<pre>";
  print_r($shirt);
  echo "</pre>";