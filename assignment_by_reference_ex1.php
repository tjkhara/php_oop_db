<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 19:44
   */

  class Product
  {
    public $cost = 2;
    public $color = "red";

    /**
     * Product constructor.
     * @param int $cost
     * @param string $color
     */
    public function __construct(int $cost, string $color)
    {
      $this->cost = $cost;
      $this->color = $color;
    }


  }

  $a = new Product(3,"blue");

  $b = $a; // Both point to the same object

  $a->color = "purple";

  echo "<pre>";
  print_r($a);
  echo "</pre>";
  echo "<pre>";
  print_r($b);
  echo "</pre>";