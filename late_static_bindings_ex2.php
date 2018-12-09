<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 11:20
   */

  class Sofa
  {
    protected static $identity = 'Sofa class';

    public static function identity_test()
    {
      echo 'self: ' . self::$identity . "<br>";
      echo 'static: ' . static::$identity . "<br>";

      echo 'get_class: ' . get_class() . "<br>";
      echo 'get_called_class: ' . get_called_class() . "<br>";
    }
  }

  class LoveSeat extends Sofa
  {
    protected static $identity = 'Loveseat class';
  }

  LoveSeat::identity_test();