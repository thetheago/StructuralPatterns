<?php

namespace Thiago\StructuralPattern\Taxes;

use Thiago\StructuralPattern\Budget;

class Ikcv extends TaxWithTwoRates
{
    protected function mustApplyMaxTax(Budget $budget): bool
    {
        return $budget->value > 300 && $budget->itemsQuantity > 3;
    }

    protected function calculateMaxTax(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calculateMinTax(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}
