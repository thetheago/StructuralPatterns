<?php

require "vendor/autoload.php";

use Thiago\StructuralPattern\Budget;
use Thiago\StructuralPattern\BudgetRegister;
use Thiago\StructuralPattern\Http\CurlHttpAdapter;

$budgetRegister = new  BudgetRegister(new CurlHttpAdapter());
$budgetRegister->register(new Budget());
