<?php

  class Student
  {
    public $first_name;
    public $last_name;
    public $country = 'None';

    protected $registration_id;
    private $tuition = 0.00;

    public function full_name()
    {
      return $this->first_name . " " . $this->last_name . "<br>";
    }

    public function hello_world()
    {
      return "Hello world!";
    }

    protected function hello_family()
    {
      return "Hello family!";
    }

    private function hello_me()
    {
      return "Hello me!";
    }
  }


  class PartTimeStudent extends Student
  {
    public function hello_parent()
    {
      return $this->hello_family();
    }
  }

  $pt_student = new PartTimeStudent();
  echo $pt_student->hello_parent();


