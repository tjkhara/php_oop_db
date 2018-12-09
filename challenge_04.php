<?php

  class Bicycle {

    public static $instance_count = 0;

    public static function create()
    {
      self::$instance_count++;
      return new Bicycle();
    }

    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City', 'BMX'];

    public $category;


    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    protected $weight_kg = 0.0;
    protected static $wheels = 2;

    public function name() {
      return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    public static function wheel_details() {
      echo "Wheels in Bicycle is " . self::$wheels . "<br>";
    }

    public function weight_kg() {
      return $this->weight_kg . ' kg';
    }

    public function set_weight_kg($value) {
      $this->weight_kg = floatval($value);
    }

    public function weight_lbs() {
      $weight_lbs = floatval($this->weight_kg) * 2.2046226218;
      return $weight_lbs . ' lbs';
    }

    public function set_weight_lbs($value) {
      $this->weight_kg = floatval($value) / 2.2046226218;
    }

  }

  class Unicycle extends Bicycle {

    public static $is_met = false;


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

  Unicycle::wheel_details();

?>
