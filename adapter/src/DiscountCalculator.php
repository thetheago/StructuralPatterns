<?php

namespace Thiago\StructuralPattern;

use Thiago\StructuralPattern\Discounts\DiscountItemsMoreThanFive;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget) : float
    {
        $discountItemsMoreThanFive = new DiscountItemsMoreThanFive();        
        return $discountItemsMoreThanFive->calculateDiscount($budget);
    }
}
