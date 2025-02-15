<?php

namespace Thiago\StructuralPattern\Taxes;

use Thiago\StructuralPattern\Budget;
use Thiago\StructuralPattern\Interfaces\TaxInterface;

class Iss implements TaxInterface
{
    public function calculate(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}