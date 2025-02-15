<?php

namespace Thiago\StructuralPattern\Interfaces;

use Thiago\StructuralPattern\Budget;

interface TaxInterface
{
    public function calculate(Budget $budget): float;
}
