<?php

namespace App\Concrete;


class BackOfficer
{
  public $baseSalary;
  public $allowance;
  public function __construct()
  {
    $this->baseSalary = 200000;
    $this->allowance = 20000;
  }

}