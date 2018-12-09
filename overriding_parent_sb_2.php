<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 12:09
   */

  class Bicycle
  {
    protected static $wheels = 2;

    public static function wheel_details()
    {
      echo "From Bicycle class" . "<br>";
      echo "Wheels in Bicycle class is " . self::$wheels . "<br>";
    }
  }

  class Unicycle extends Bicycle
  {
    protected static $wheels = 1;

    public static function wheel_details()
    {
      echo "Stuff in Unicycle before bicycle wheel_details." . "<br>";
      parent::wheel_details();
      echo "Wheels in Unicycle class is " . self::$wheels . "<br>";
      echo "Stuff in Unicycle after bicycle wheel_details." . "<br>";
    }
  }

  Bicycle::wheel_details();

  echo "<br>";
  echo "<hr>";

  Unicycle::wheel_details();