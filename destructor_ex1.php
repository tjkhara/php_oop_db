<?php

  class Product
  {
    public static $instance_count = 0;

    public function __construct()
    {
      self::$instance_count++;
      echo "Constructor is running." . "<br>";
    }

    public function __destruct()
    {
      self::$instance_count--;
      echo "Destructor is running." . "<br>";
    }
  }

  $p = new Product();

  // Constructor is running.
  // Destructor is running.

  echo Product::$instance_count . "<br>";

  unset($p);

  echo Product::$instance_count . "<br>";

