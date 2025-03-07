<?php

namespace Thiago\StructuralPattern\BudgetStates;

use Thiago\StructuralPattern\Budget;

class BudgetAproved extends BudgetState
{
    public function calculateExtraValue(Budget $budget): float
    {
        return $budget->value * 0.02;
    }

    public function finish(Budget $budget): void
    {
        $budget->atualState = new BudgetFinished();
    }
}
