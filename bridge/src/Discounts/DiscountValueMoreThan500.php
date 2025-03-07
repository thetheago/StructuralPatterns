<?php

namespace Thiago\StructuralPattern\Discounts;

use Thiago\StructuralPattern\Budget;

class DiscountValueMoreThan500 extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->value > 500 && $budget->value <= 1000) {
            return $budget->value * 0.5;
        }

        return $this->chainDiscount($budget);
    }
}
