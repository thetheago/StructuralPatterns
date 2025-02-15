<?php

namespace Thiago\StructuralPattern\Discounts;

use Thiago\StructuralPattern\Budget;

class DiscountValueMoreThan1000 extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 1000) {
            return $budget->value * 0.05;
        }

        return $this->chainDiscount($budget);
    }
}
