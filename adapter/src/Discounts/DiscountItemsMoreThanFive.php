<?php

namespace Thiago\StructuralPattern\Discounts;

use Thiago\StructuralPattern\Budget;

class DiscountItemsMoreThanFive extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        if ($budget->itemsQuantity > 5) {
            return $budget->value * 0.1;
        }

        return $this->chainDiscount($budget);
    }
}
