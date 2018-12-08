<?php

class Animal
{
  var $num_legs = 2;

  function sound()
  {
    echo "Generic animal sound";
  }
}

class Cat extends Animal
{
  var $num_legs = 4;
  var $climb_trees = true;
}

class Tiger extends Cat
{
  var $eat_man = true;
}

class Squirrel extends Animal
{
  var $num_legs = 2;
}

$animal1 = new Animal();
echo $animal1->num_legs . "<br>";

$cat1 = new Cat();
echo $cat1->num_legs . "<br>";

$tiger1 = new Tiger();
echo "Can a tiger eat man " . $tiger1->eat_man . "<br>";

$squirrel = new Squirrel();
echo "A squirrel has " . $squirrel->num_legs . " legs." . "<br>";