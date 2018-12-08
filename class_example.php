<?php

class Student
{

}

$classes = get_declared_classes();

echo "Classes: " . implode(', ',$classes) . "<br>";

$class_names = ["Product", "Student", "student"];

foreach ($class_names as $name)
{
  if(class_exists($name))
  {
    echo "{$name} class exists." . "<br>";
  }
  else
  {
    echo "{$name} class does not exist." . "<br>";
  }
}


?>