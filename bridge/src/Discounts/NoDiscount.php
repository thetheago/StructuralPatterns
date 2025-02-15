<?php

namespace Thiago\StructuralPattern\Discounts;

use Thiago\StructuralPattern\Budget;

class NoDiscount extends Discount
{
    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}
