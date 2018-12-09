<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 19:31
   */
  class Product
  {
    public static $instance_count = 0;

    public function __construct()
    {
      self::$instance_count++;
    }

    public function __destruct()
    {
      self::$instance_count--;
    }

    // This is run when the clone keyword is called
    public function __clone()
    {
      self::$instance_count++;
      echo "Wow clone ran... " . "<br>";
    }
  }

  $p = new Product();

  $p1 = clone $p;
  // Wow clone ran...