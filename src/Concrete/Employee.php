<?php

namespace App\Abstracts;
// namespace App\Concrete;


abstract class Employee
{
  public $baseSalary;
  public $allowance;
  public function __construct()
  {
    $this->baseSalary = 200000;
    $this->allowance = 20000;
  }

}
