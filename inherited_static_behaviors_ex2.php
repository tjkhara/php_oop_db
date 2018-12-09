<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 10:46
   */

  class Student
  {
    public static $total_students = 0;
  }

  class PartTimeStudent extends Student
  {

  }

  Student::$total_students++;
  Student::$total_students++;
  Student::$total_students++;
  PartTimeStudent::$total_students++;

  echo Student::$total_students . "<br>";
  echo PartTimeStudent::$total_students . "<br>";