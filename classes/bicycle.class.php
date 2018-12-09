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
      echo "Wheels: " . self::$wheels . "<br>";
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