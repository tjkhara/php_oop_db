<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 11:20
   */

  class Bicycle
  {
    protected static $wheels = 2;

    public static function wheel_details()
    {
      // Replaced keyword self with static *****
      $wheel_string = self::$wheels == 1 ? "1 wheel" : static::$wheels . " wheels";
      return "It has " . $wheel_string . ".";
    }
  }

  class Unicycle extends Bicycle
  {
    protected static $wheels = 1;
  }

  echo Bicycle::wheel_details();

  echo "<br>";

  echo Unicycle::wheel_details();