<?php

  class Student
  {
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello()
    {
      return "Hello world";
    }

    function full_name()
    {
      echo "First name " . $this->first_name . " " . "Last name " . $this->last_name . "<br>";
    }
  }

  $student1 = new Student(); // Creating an instance of a class
  $student2 = new Student(); // Creating an instance of a class

  $student1->first_name = 'Lucy';
  $student1->last_name = 'Ricardo';

  $student2->first_name = 'Ethel';
  $student2->last_name = 'Mertz';

  echo "<br>";
  echo "<hr>";

  $student1->full_name();
