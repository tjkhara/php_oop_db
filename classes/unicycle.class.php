<?php

  class Unicycle extends Bicycle {

    public static $is_met = true;


    public static function create()
    {
      self::$instance_count++;
      return new Unicycle();
    }


    // visibility must match property being overridden
    protected static $wheels = 1;

    public function bug_test() {
      return $this->weight_kg;
    }

    public static function wheel_details() {

      if(self::$is_met)
      {
        echo "Wheels in Unicycle is " . self::$wheels . "<br>";
        echo "Running the Bicycle wheel_details method " . "<br>";
        parent::wheel_details() . "<br>";
        echo "Stuff after running the parent method." . "<br>";
      }
      else
      {
        echo "Wheels in Unicycle is " . self::$wheels . "<br>";
      }


    }
  }