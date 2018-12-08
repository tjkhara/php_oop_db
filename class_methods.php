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
  }

  $student1 = new Student(); // Creating an instance of a class
  $student2 = new Student(); // Creating an instance of a class

  $student1->first_name = 'Lucy';
  $student1->last_name = 'Ricardo';

  $student2->first_name = 'Ethel';
  $student2->last_name = 'Mertz';

  echo $student1->first_name . " " . $student1->last_name . "<br>";
  echo $student2->first_name . " " . $student2->last_name . "<br>";

  echo $student1->say_hello(). "<br>";
  echo $student2->say_hello(). "<br>";

  $class_methods = get_class_methods("Student");

  foreach ($class_methods as $method)
  {
    echo $method . "<br>";
  }

  echo "<br>";
  echo "Class methods: " . implode(', ', $class_methods) . "<br>";


  echo "<hr>";
  echo(method_exists($student1,"say_hello") ? "yes" : "no");
