<?php

  class Student
  {
    public static $grades = ['Freshman', 'Sophmore', 'Junior', 'Senior'];
    private static $total_students = 0;

    public static function count()
    {
      return self::$total_students;
    }
  }

  echo Student::$grades[0];

  echo "<br>";

  echo Student::count();