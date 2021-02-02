<?php


namespace App\Concrete;


class SalaryCalculator
{
    private $engineer;
    private float $salary = 200000;

    public function __construct(Engineer $engineer)
    {
        $this->engineer = $engineer;
    }

    public function calculate()
    {
      //TODO: implement calculate method
      return $this->engineer->baseSalary + $this->engineer->allowance;
    }

    public function show()
    {
      echo $this->calculate().PHP_EOL;
      // echo $this->salary.PHP_EOL;
    }
}