<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 10:46
   */

  class Student
  {
    public static $grades = ['Freshman', 'Sophmore', 'Junior', 'Senior'];
  }

  class PartTimeStudent extends Student
  {

  }

  PartTimeStudent::$grades[] = 'Alumni';

  echo "Grades Array: " . implode(', ', Student::$grades) . "<br>";