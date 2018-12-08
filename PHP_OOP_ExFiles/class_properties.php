<?php

  class Student
  {
    var $first_name;
    var $last_name;
    var $country = 'None';
  }

  $student1 = new Student(); // Creating an instance of a class
  $student2 = new Student(); // Creating an instance of a class

  $student1->first_name = 'Lucy';
  $student1->last_name = 'Ricardo';

  $student2->first_name = 'Ethel';
  $student2->last_name = 'Mertz';

  echo $student1->first_name;
  echo "<br>";
  echo $student1->last_name;
  echo "<br>";
  echo "<hr>";
  echo $student2->first_name;
  echo "<br>";
  echo $student2->last_name;
  echo "<br>";
  echo "<hr>";
  $class_vars = get_class_vars("Student");
  echo "<pre>";
  print_r($class_vars);
  echo "</pre>";
  echo "<hr>";
  $object_vars = get_object_vars($student1);
  echo "<pre>";
  print_r($student2);
  echo "</pre>";
  echo "<hr>";
  if(property_exists("Student","first_name"))
  {
    echo "Yes the property exists.";
    echo "<br>";
  }
  else
  {
    echo "No the property does not exist.";
    echo "<br>";
  }

