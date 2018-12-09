<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 18:42
   */

  class Product
  {
    public $name;
    public $color;

    public function __construct()
    {
      $this->color = 'blue';
    }
  }

  $shirt = new Product();
  echo $shirt->color;
  // blue