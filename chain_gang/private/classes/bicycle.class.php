<?php

  class Bicycle
  {
    public const CATEGORIES = ['road','mountain','hybrid','cruiser','city','BMX'];

    public const GENDERS = ['mens', 'womens', 'unisex'];

    public const CONDITION_OPTIONS =
      [
        1 => 'Beat Up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like new'
      ];

    public $brand = "Not set";
    public $model = "Not set";
    public $year = "Not set";
    public $category = "Not set";
    public $color = "Not set";
    public $gender = "Not set";
    public $price = 0;
    public $weight_kg = 0;
    public $condition = 0;

    // Method will take in id and return condition
    public function condition($id)
    {
      if($id == 0)
      {
        echo "ID is not set" . "<br>";
        return;
      }
      else
      {
        return self::CONDITION_OPTIONS[$id];
      }
    }


    //  brand,model,year,category,gender,color,weight_kg,condition_id,price
    public function __construct($args=[])
    {
      $this->brand = $args['brand'] ?? $this->brand;
      $this->model = $args['model'] ?? $this->model;
      $this->year = $args['year'] ?? $this->year;
      $this->category = $args['category'] ?? $this->category;
      $this->color = $args['color'] ?? $this->color;
      $this->condition = $args['condition'] ?? $this->condition;
      $this->gender = $args['gender'] ?? $this->gender;
      $this->price = $args['price'] ?? $this->price;
      $this->weight_kg = $args['weight_kg'] ?? $this->weight_kg;
    }

    // Getters and setters

    /**
     * @return int|mixed
     */
    public function getWeightKg()
    {
      return floatval($this->weight_kg);
    }

    // Set weight KG
    public function setWeightKg($weight_kg): void
    {
      if($weight_kg <= 0)
      {
        trigger_error('Weight must be greater than zero.', E_USER_NOTICE);
        return;
      }

      $this->weight_kg = floatval($weight_kg);
    }

    // Get weight in pounds
    public function getWeightPounds()
    {
      return $this->weight_kg * 2.2046226218;
    }

    // Set weight pounds
    public function setWeightPounds($weight_pounds)
    {
      $this->weight_kg = floatval($weight_pounds)/2.2046226218;
    }
  }

//  brand,model,year,category,gender,color,weight_kg,condition_id,price
//  Trek,Emonda,2017,Hybrid,Unisex,black,1.5,5,1495.00

