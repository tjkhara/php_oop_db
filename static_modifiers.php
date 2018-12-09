<?php
  /**
   * Created by PhpStorm.
   * User: Tajeshwar Khara
   * Date: 09-12-2018
   * Time: 10:36
   */

  class Student
  {
    public static $grades = ['Freshman', 'Sophmore', 'Junior', 'Senior'];
    private static $total_students = 0;

    public static function motto()
    {
      return "To learn PHP OOP!";
    }

    public static function count()
    {
      return self::$total_students;
    }

    public static function add_student()
    {
      self::$total_students++;
    }
  }

  Student::add_student();

  echo Student::count() . "<br>";

  Student::add_student();

  echo Student::count() . "<br>";