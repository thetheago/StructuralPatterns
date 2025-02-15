<?php

namespace Thiago\StructuralPattern;

use Thiago\StructuralPattern\Interfaces\TaxInterface;

class TaxCalculator
{
    public function calculate(Budget $budget, TaxInterface $tax): float
    {
        return $tax->calculate($budget);
    }
}
