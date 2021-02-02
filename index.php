<?php

require "vendor/autoload.php";

$engineer = new \App\Concrete\Engineer();
$calculator = new \App\Concrete\SalaryCalculator($engineer);
$calculator->calculate();
$calculator->show();
