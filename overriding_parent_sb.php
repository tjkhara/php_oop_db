<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 12:09
   */

  class Chef
  {
    public static function make_dinner()
    {
      echo "Make dinner." . "<br>";
    }
  }

  class AmateurChef extends Chef
  {
    public static function make_dinner()
    {
      echo "Stuff before parent function." . "<br>";
      parent::make_dinner();
      echo "Stuff after parent function. " . "<br>";
    }
  }

  Chef::make_dinner();
  echo "<br>";
  echo "<hr>";
  AmateurChef::make_dinner();