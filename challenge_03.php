<?php

  class Bicycle {

    private $brand;
    private $model;
    private $year;
    private $description = 'Used bicycle';
    private $weight_kg = 0.0;
    protected $wheels = 2;
    protected $wheel_string;

    // Returns details about the wheels
    public function wheel_details()
    {
      if($this->wheels == 1)
      {
        return "It has " . $this->wheels . " wheel" . "<br>";
      }
      else
      {
        return "It has " . $this->wheels . " wheels" . "<br>";
      }
    }


    /**
     * @return int
     */
    public function getWheels(): int
    {
      return $this->wheels;
    }


    /**
     * @return mixed
     */
    public function getBrand()
    {
      return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
      $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
      return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
      $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year): void
    {
      $this->year = $year;
    }


    // Returns the name of the bike
    public function name() {
      return $this->brand . " " . $this->model . " (" . $this->year . ")";
    }

    // Returns weight in lbs
    public function weight_lbs() {
      return floatval($this->weight_kg) * 2.2046226218 . " lbs" . "<br>";
    }

    // Takes weight in lbs and sets it as KG
    public function set_weight_lbs($value) {
      $this->weight_kg = floatval($value) / 2.2046226218;
    }




    // Takes weight as KG and sets it
    public function set_weight_kg($weight)
    {
      if($weight <= 0)
      {
        trigger_error('Weight must be greater than zero.', E_USER_NOTICE);
        return;
      }
      $this->weight_kg = $weight;
    }

    // Returns the weight in KG
    public function weight_kg()
    {
      return $this->weight_kg . " KG" . "<br>";
    }

  }

  class Unicycle extends Bicycle
  {
    protected $wheels = 1;
  }

  $trek = new Bicycle;
  $trek->setBrand('Trek');
  $trek->setModel('Emonda');
  $trek->setYear('2017');
  $trek->set_weight_kg(1.0);

  echo $trek->name() . "<br />";

  echo $trek->weight_kg() . "<br />";
  echo $trek->weight_lbs() . "<br />";
  // notice that one is property, one is a method

  $trek->set_weight_lbs(2);
  echo $trek->weight_kg() . "<br />";
  echo $trek->weight_lbs() . "<br />";

  echo "<br>";
  echo "<hr>";

  $u = new Unicycle();
  echo "<pre>";
  print_r($u);
  echo "</pre>";

  echo "<br>";
  echo "<hr>";

  echo $u->wheel_details();






