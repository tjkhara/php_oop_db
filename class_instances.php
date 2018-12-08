<?php

  class Student
  {

  }

  $student1 = new Student(); // Creating an instance of a class
  $student2 = new Student(); // Creating an instance of a class

  $classes = get_declared_classes();

  echo "Classes: " . implode(', ',$classes) . "<br>";

  $class_names = ["Product", "Student", "student"];

  foreach ($class_names as $name)
  {
    $class_name = get_class($student1);

    if(is_a($student1,$name))
    {
      echo "$class_name is an object of {$name}." . "<br>";
    }
    else
    {
      echo "$class_name is not an object of {$name}." . "<br>";
    }
  }

?>