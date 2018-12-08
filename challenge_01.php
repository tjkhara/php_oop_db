<?php

class Bicycle
{
  var $brand = "Not set";
  var $model = "Not set";
  var $year = "Not set";
  var $description;
  var $weight_kg;
  var $name = "Not set";

  function set_name()
  {
    $this->name = $this->brand . " " . $this->model . " " . $this->year;
  }

  function weight_lbs($kg)
  {
    $weight_in_lbs = floatval($kg) * 2.2046226218;
    return $weight_in_lbs;
  }

  function set_weight_pounds($weight_in_lbs)
  {
    $this->weight_kg = floatval($weight_in_lbs)/2.2046226218;
  }

}

$bicycle1 = new Bicycle();
$bicycle1->brand = "Hero";
$bicycle1->model = "Avenger";
$bicycle1->year = 2018;
$bicycle1->description = "This is a very good bike.";
$bicycle1->weight_kg = 12;
$bicycle1->set_name();

echo "<pre>";
print_r($bicycle1);
echo "</pre>";

$bicycle2 = new Bicycle();
$bicycle2->brand = "Hero";
$bicycle2->model = "Activa";
$bicycle2->year = 2017;
$bicycle2->description = "This is not a great road bike.";
$bicycle2->set_weight_pounds(60);
$bicycle2->set_name();

  echo "<pre>";
  print_r($bicycle2);
  echo "</pre>";
